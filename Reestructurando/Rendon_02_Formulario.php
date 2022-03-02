<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Turismo Quito | Inicio</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
        nav {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        .big-header {
            height: 20vh;
            min-height: 20vh;
        }

        footer {
            display: grid;
        }


        /* Formulario */
        textarea {
            resize: none;
            min-height: 15rem;
        }

        .semi-transparent {
            color: rgba(155, 151, 151, 0.904);
        }

        .form-wrong {
            border: 2px solid red;
            box-shadow: 0 0 2px red;
        }

        input {
            outline: none;
        }

        .msj-error {
            color: red;
        }

        .msj-error-hide {
            height: 0;
            visibility: hidden;
        }
    </style>
    <script src="https://kit.fontawesome.com/324a9c7d86.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="big-header big-header-2">
        <?php
		include('comun/NavPrincipal.php');
		?>
        <?php
        include('Rendon_04_CRUD__Nav.PHP');
        ?>
    </header>

    <main>

        <section class="mas-info">
            <h2>Obtener mayor información</h2>
            <div class="container-forms">
                <form class="mas-informacion" id="mas_informacion" method="post" action="./Rendon_04_CRUD_Registrar.php">
                    <div class="form-group">
                        <span class="label-form">
                            Nombre*
                        </span> <br>
                        <input class="form-control" type="text" name="nombre" id="nombre-label">
                        <p class="msj-error msj-error-hide" id="msj-error-nombre">Este campo es obligatorio. No se acepta numeros, ni simbolos.</p>
                    </div>

                    <div class="form-group">
                        <span class="label-form">
                            Apellidos*
                        </span><br>
                        <input class="form-control" type="text" name="apellidos" id="apellidos-label">
                        <p class="msj-error msj-error-hide" id="msj-error-apellidos">Este campo es obligatorio. No se acepta numeros, ni simbolos.</p>
                    </div>

                    <div class="form-group">
                        <span class="label-form">
                            telefono*
                        </span> <br>
                        <input class="form-control" type="text" name="telefono" id="telefono-label">
                        <p class="msj-error msj-error-hide" id="msj-error-telefono">Solo se aceptan números. Deben ser 10 digitos.</p>
                    </div>

                    <div class="form-group">
                        <span class="label-form">
                            Correo*
                        </span><br>
                        <input class="form-control" type="email" name="correo" id="correo-label">
                        <p class="msj-error msj-error-hide" id="msj-error-correo">Debe ser un correo valido.</p>
                    </div>

                    <div class="form-group">
                        <span class="label-form">
                            Asunto*
                        </span> <br>
                        <input class="form-control" type="text" name="asunto" id="asunto-label">
                    </div>

                    <div class="form-group">
                        <span class="label-form">
                            Mensaje*
                        </span><br>
                        <textarea class="form-control" name="mensaje" id="mensaje-label" cols="60" rows="10"></textarea>
                    </div>

                    <div class="form-group">

                        <input class="btn-submit form-control" type="submit" name="submit" id="submit">
                        <p class="msj-error msj-error-hide" id="msj-error-enviar">Hay campos erroneos.</p>
                    </div>

                </form>
            </div>
        </section>
    </main>
    <footer>
        <img class="logo" src="assets/img/logo.png" alt="logo">
        <div class="social-networks">
            <div>
                <img src="assets/img/facebook.png" alt="">
                <span>Facebook</span>
            </div>
            <div>
                <img src="assets/img/instagram.png" alt="">
                <span>Instagram</span>
            </div>
            <div>
                <img src="assets/img/twitter.png" alt="">
                <span>Twitter</span>
            </div>

        </div>
        <div class="info-footer">

        </div>
    </footer>
    <script src="assets/js/frmRendon.js"></script>
</body>

</html>