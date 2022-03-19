<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Viajes, Explora,  html" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<link rel="stylesheet" href="assets/css/comun.css">
    <title>Blog | Turismo Quito</title>
    <style>
        .row > [class^="col-"] {
            padding-top: .75rem;
            padding-bottom: .75rem;
            background-color: rgba(39, 41, 43, 0.03);
            border: 1px solid rgba(39, 41, 43, 0.1);
        }

        .cgealert {
            position: relative;
            padding: 0.3rem 0.3rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }

        .cgecorrecto {
            color: #ad000e;
            background-color: #f36570;
            border-color: #f3061d;
        }

        .cgeerror {
            color: #447051;
            background-color: #76e4b2;
            border-color: #468368;
        }
    </style>
</head>

<body>
    <header class="big-header-explora">
                <?php
				include('comun/NavPrincipal.php');
				?>
				<?php
				include('comun/Gonzalez_Nav_CRUD.php');
				nav_crud('Gonzalez');
				?>
    </header>

    <main class="container-md" Style="padding-top: .75rem;">
        <form id="formPremio" method="post" action="Gonzalez_04_CRUD_Editar_2.php">
            <div class="align-item-center">
				<div class="input-group mb-3">
                    <span class="input-group-text">Id: </span>
                    <input type="text" class="form-control" placeholder="id" aria-label="id_usuario"
                           name="id_usuario"
                           aria-describedby="basic-addon1" id="id_usuario" />
                </div>
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
    <?php
		include('Comun/Footer.php');
	?>
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

</body>

</html>