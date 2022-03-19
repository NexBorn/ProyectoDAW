function resultadoseguro(resultado, valoractual) {
    return valoractual && resultado;
}
function esVacio(file) {
    var filePath = file.value;
    console.log(txt);
    resultado = "";
    if (filePath.value === '') {
        resultado = "es requerido";
    }
    return resultado;
}
function esVacio(txt, min, max, regexp) {
    console.log(txt);
    resultado = "";
    if (txt.value === '') {
        resultado = "es requerido";
    }
    else if (!regexp.test(txt.value)) { //letra.test(txtNombres.value)
        resultado = "solo debe contener letras";
    }
    else if (txt.value.length < min) {
        resultado = "minimo " + min + " caracteres";
    }
    else if (txt.value.length > max) {
        resultado = "maximo " + max + " caracteres";
    }
    return resultado;
}

function limpiarMensajes() {
    var mensajes1 = document.querySelectorAll(".cgecorrecto");
    for (let i = 0; i < mensajes1.length; i++) {
        mensajes1[i].remove();// remueve o elimina un elemento de mi doc html
    }
    var mensajes2 = document.querySelectorAll(".cgeerror");
    for (let i = 0; i < mensajes2.length; i++) {
        mensajes2[i].remove();// remueve o elimina un elemento de mi doc html
    }
}

function mensaje(elemento, nombre, cadenaMensaje) {
    //<span class="input-group-text" >Nombres: </span>
    if (cadenaMensaje.length > 0) {
        elemento.focus();
        var nodoPadre = elemento.parentNode;
        var nodoMensaje = document.createElement("span");
        nodoMensaje.textContent = nombre + " " + cadenaMensaje;
        //nodoMensaje.style.color = "red";
        //nodoMensaje.display = "block";
        nodoMensaje.setAttribute("class", "input-group-text cgecorrecto");
        nodoPadre.appendChild(nodoMensaje);
    } else {
        elemento.focus();
        var nodoPadre = elemento.parentNode;
        var nodoMensaje = document.createElement("span");
        nodoMensaje.textContent = nombre + " es correcto";
        //nodoMensaje.style.color = "red";
        //nodoMensaje.display = "block";
        nodoMensaje.setAttribute("class", "input-group-text cgeerror");
        nodoPadre.appendChild(nodoMensaje);
    }
}


function evaluatxt(txt, min, max, regexp, nombre, resultado) {
    var strResult = esVacio(txt, min, max, /[a-z]+/gi);
    return evalua(txt, strResult, nombre, resultado);
}

function evaluafile(file, nombre, resultado) {
    var strResult = esVacio(file);
    return evalua(file, strResult, nombre, resultado);
}

function evaluaselect(select, nombre, resultado) {
    var strResult = "";
    var optForm = select.selectedIndex;
    if (optForm == null || optForm == 0) {
        strResult = "debe ser seleccionada";
    }
    return evalua(select, strResult, nombre, resultado);
}

function evalua(elem, strResult, nombre, resultado) {
    var bool = strResult.length === 0;
    mensaje(elem, nombre, strResult);
    return resultadoseguro(resultado, bool);
}