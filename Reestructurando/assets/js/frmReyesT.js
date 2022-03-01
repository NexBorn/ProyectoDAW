document.querySelectorAll('#nombre-label ').forEach((el) => {
    el.addEventListener('keydown', function (ev) {
        limpiarMensajes();
        var regex = /^[a-z ,.'-]+$/i;
        var letra = ev.target.value;
        console.log(letra)
        if (regex.test(letra)) {
            return;
        }
        mensaje("Ingresa letras", ev.target)
    });
});

document.querySelectorAll('#apellido-label ').forEach((el) => {
    el.addEventListener('keydown', function (ev) {
        limpiarMensajes();
        var regex = /^[a-z ,.'-]+$/i;
        var letra = ev.target.value;
        console.log(letra)
        if (regex.test(letra)) {
            return;
        }
        mensaje("Ingresa letras", ev.target)
    });
});


var form = document.querySelector("#inscripciones");
form.addEventListener('submit', valida);

function valida(event) {
    var nombre = document.getElementById("nombre-label");
    var apellido = document.getElementById("apellido-label");
    var edad = document.getElementById("edad");

    if (nombre.value == null) {
        mensaje("Rellena este campo", nombre);
        event.preventDefault();
        return;
    }
    if (apellido.value == null) {
        mensaje("Rellena este campo", nombre);
        event.preventDefault();
        return;
    }
    if (edad.value == null) {
        mensaje("Rellena este campo", nombre);
        event.preventDefault();
        return;
    }

    var fecha = document.getElementById("date");
    var fechaop = new Date(fecha.value);
    var fechaActual = new Date();

    if(fechaop > fechaActual){
        mensaje("Fecha no puede ser superior a la actual",fecha);
        event.preventDefault();
        return;
    }

    if (!document.querySelector('input[name="radiobtn"]:checked')) {
        event.preventDefault();
        return;
    }
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