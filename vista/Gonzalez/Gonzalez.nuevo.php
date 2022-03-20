<!-- incluimos  Encabezado -->
<?php require_once 'vista/templates/encabezado.php'; ?>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<main class="container-md" Style="padding-top: .75rem;">
        <form id="formPremio" method="post" action="index.php?c=Gonzalez&f=gonzaleznuevo">
            <div class="align-item-center">
                <div class="input-group mb-3">
                    <span class="input-group-text">Nombres: </span>
                    <input type="text" class="form-control" placeholder="Nombres" aria-label="Nombre"
                           name="nombre"
                           aria-describedby="basic-addon1" id="nombre" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Apellidos: </span>
                    <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellidos"
                           name="apellido"
                           aria-describedby="basic-addon1" id="apellido" />
                </div>
				<div class="input-group mb-3">
                    <span class="input-group-text">Usuario: </span>
                    <input type="text" class="form-control" placeholder="Usuario" aria-label="Nombre"
                           name="usuario"
                           aria-describedby="basic-addon1" id="nombre" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Contraseña: </span>
                    <input type="text" class="form-control" placeholder="Contraseña" aria-label="Apellidos"
                           name="contrasena"
                           aria-describedby="basic-addon1" id="apellido" />
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3"
                            name="enviar">
                        Agregar
                    </button>
                </div>
            </div>
        </form>
    </main>
	
    <script type="text/javascript" src="assets/bootstrap/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/CGE_form_Funciones.js"></script>
    <script type="text/javascript" src="assets/js/CGE_Variables_Globales.js"></script>

    <script>
        var form = document.querySelector("#formPremio");
        form.addEventListener('submit', validar);

        function validar(event) {
            limpiarMensajes();
            var resultado = true;
            var nombre = document.getElementById("nombre");
            var apellido = document.getElementById("apellido");

            resultado = evaluatxt(nombre, 0, 50, letra, "El nombre", resultado);
            resultado = evaluatxt(apellido, 0, 50, letra, "El apellido", resultado);

            if (!resultado) {
                event.preventDefault();  // detener el evento  //stop form from submitting
                alert("Datos Incorrectos");
            }/* else {
                alert("Datos correctos");
            }*/
            return resultado;
        }

    </script>

<!-- incluimos  pie de pagina -->
<?php require_once 'vista/templates/piedepagina.php'; ?>
