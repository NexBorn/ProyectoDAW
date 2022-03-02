<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Viajes, Explora,  html"/>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Conoce Formulario | Turismo Quito</title>
</head>
<body>
<header class="big-header-explora">
        <?php
        include('comun/NavPrincipal.php');
        ?>
</header>



<main>
    <div class="block-heading">
        <h2 id="title-section">
            ¡Inscribete con los mejores!
        </h2>>
    </div>
    <div class="container-forms">
        <form id="inscripciones">
            <div class="form-group">
                    <span class="label-form">
                        Nombre
                    </span> <br>
                <input class="form-control" type="text" name="nombre" id="nombre-label">
            </div>

            <div class="form-group">
                    <span class="label-form">
                        Apellidos
                    </span><br>
                <input class="form-control" type="text" name="apellido" id="apellido-label">
            </div>
            <div class="form-group">
                    <span class="label-form">
                        Genero
                    </span><br>
                <div>
                    Masculino: <input type="radio" name="genero_masculino" class="checkbox">
                    Femenino: <input type="radio" name="genero_femenino" class="checkbox">
                </div>

            </div>
            <div class="form-group">
                    <span class="label-form">
                        Edad
                    </span><br>
                <input class="form-control" type="number" name="edad" id="edad">
            </div>

            <div class="form-group">
                    <span class="label-form">
                        Fecha de nacimiento
                    </span><br>
                <input class="form-control" type="date" name="fecha_nac" id="date">
            </div>

            <div class="form-group">

                <input class="btn-submit" type="submit" name="submit" id="submit">
            </div>


        </form>
    </div>
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
</body>
</html>

<script src="assets/js/frmReyesT.js"></script>