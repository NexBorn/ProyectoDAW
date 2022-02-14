const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{10,10}$/ // 7 a 14 numeros.
}

const formulario = document.querySelector(".mas-informacion");
const inputs = document.querySelectorAll(".form-control");

let camposCorrectos = false;

let campos = {
	"nombre-label": false,
	"apellidos-label": false,
	"telefono-label": false,
	"correo-label": false,
	"asunto-label" :false,
	"mensaje-label": false
}

const validarFormulario = (e) => {
	switch(e.target.name){
		case "nombre":
			validarCampo(e, expresiones.nombre, 'nombre-label', 'msj-error-nombre');
		break;

		case "apellidos":
			validarCampo(e, expresiones.nombre, 'apellidos-label', 'msj-error-apellidos');
		break;

		case "telefono":
			validarCampo(e, expresiones.telefono, 'telefono-label', 'msj-error-telefono');
			if(document.getElementById('telefono-label').value==""){
				campos["telefono-label"] = true;
			}	
		break;

		case "correo":
			validarCampo(e, expresiones.correo, 'correo-label', 'msj-error-correo');
		break;
	}
};


//Valida los campos según la expresión que se quiere evaluar
const validarCampo = (e, expresion, inputID, msjErrorID) =>{
	if(expresion.test(e.target.value)){
		document.getElementById(inputID).classList.remove('form-wrong'); //Elimina el estilo de error
		document.getElementById(msjErrorID).classList.add('msj-error-hide'); //Oculta el mensaje de error
		campos[inputID] = true;
	}
	else{
		document.getElementById(inputID).classList.add('form-wrong'); //Añade el estilo de error
		document.getElementById(msjErrorID).classList.remove('msj-error-hide'); //Muestra el mensaje de error
		campos[inputID] = false;
	}
};


//Añade las validaciones a los inputs
inputs.forEach( (input) => {
    input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

//Al dar click en Enviar se valida y recarga la pagina
formulario.addEventListener('submit', (e) =>{
	
	if(!campos["apellidos-label"] || !campos["correo-label"] 
	|| !campos["nombre-label"] || !campos["telefono-label"] ||
	document.getElementById('asunto-label').value.length == 0 
	|| document.getElementById('mensaje-label').value.length == 0)
	{
			document.getElementById('msj-error-enviar').classList.remove('msj-error-hide');
			e.preventDefault(); 
	}
})