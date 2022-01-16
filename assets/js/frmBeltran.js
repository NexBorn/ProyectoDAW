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

var pattern = /\d/,
caja = document.getElementById("cedula");
caja.addEventListener("keypress", function(e){
if (!pattern.test(String.fromCharCode(e.keyCode)) || this.value.length == 10)
    e.preventDefault();
if (this.value.length === 1)
    this.value += "";
}, false);

var txtSoloLetras = document.getElementById("name")
txtSoloLetras.addEventListener("input", function (event) {
    validarTextoEntrada(this, "[a-z ]")
})
function validarTextoEntrada(input, patron) {
    var texto = input.value
    var letras = texto.split("")
    for (var x in letras) {
        var letra = letras[x]
        if (!(new RegExp(patron, "i")).test(letra)) {
            letras[x] = ""
        }
    }
    input.value = letras.join("")
}

var pattern = /\d/,
caja = document.getElementById("guestelephone");
caja.addEventListener("keypress", function(e){
if (!pattern.test(String.fromCharCode(e.keyCode)) || this.value.length == 10)
    e.preventDefault();
if (this.value.length === 1)
    this.value += "";
}, false);


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
        mensaje("Rellena este campo", nombre);
        event.preventDefault();
        return;
    }
    if (email.value == null) {
        mensaje("Rellena este campo", email);
        event.preventDefault();
        return;
    }

    var fechainicial = document.getElementById("fechadesde").value;
    var fechafinal = document.getElementById("fechahasta").value;
    if(fechafinal.year > fechainicial.year || fechafinal.month > fechainicial.month || fechafinal.day > fechainicial.day)
    alert("La fecha final debe ser mayor a la fecha inicial");

}