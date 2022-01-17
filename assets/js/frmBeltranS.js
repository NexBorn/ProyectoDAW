function valideKey(evt){	
    // code is the decimal ASCII representation of the pressed key.
    var code = (evt.which) ? evt.which : evt.keyCode;
    
    if(code==8) { // backspace.
      return true;
    } else if(code>=48 && code<=57) { // is a number.
      return true;
    } else{ // other keys.
      return false;
    }
}

function txNombres(event) {
    if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
     event.returnValue = false;
   }


   function validar_email( email ) 
   {
       var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
       return regex.test(email) ? true : false;
   }

 
var form = document.querySelector("#reservaciones");
form.addEventListener('submit', valida);
function valida(event) {
    var cedula = document.getElementById("cedula");
    var nombre = document.getElementById("name");
    var email = document.getElementById("email");

    if (cedula.value == null) {
        mensaje("completa este campo", cedula);
        event.preventDefault();
        return;
    }
    if (nombre.value == null) {
        mensaje("completa este campo", nombre);
        event.preventDefault();
        return;
    }
    if (email.value == null) {
        mensaje("completa este campo", email);
        event.preventDefault();
        return;
    }

    var email_prueba =document.getElementById("#email");
    if( validar_email( email_prueba ) )
    {
        alert("El email es correcto");
    }
    else
    {
        alert("El email NO es correcto");
    }
    var fechainicial = document.getElementById("fechadesde").value;
    var fechafinal = document.getElementById("fechahasta").value;
    if(fechafinal.year > fechainicial.year || fechafinal.month > fechainicial.month || fechafinal.day > fechainicial.day)
    alert("La fecha final debe ser mayor a la fecha inicial");

}
function mensaje(cadenaMensaje, elemento) {
    elemento.focus();
    var nodoPadre = elemento.parentNode;
    var nodoMensaje = document.createElement("span");
    nodoMensaje.textContent = cadenaMensaje;
    nodoMensaje.style.color = "red";
    nodoMensaje.display = "block";
    nodoMensaje.setAttribute("class", "mensajeError");
    nodoPadre.appendChild(nodoMensaje);
}

function limpiarMensajes() {
    var mensajes = document.querySelectorAll(".mensajeError");
    for (let i = 0; i < mensajes.length; i++) {
        mensajes[i].remove();// remueve o elimina un elemento de mi doc html
    }
}