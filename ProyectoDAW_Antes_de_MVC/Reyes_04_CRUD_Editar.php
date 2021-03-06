<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Viajes, Explora,  html"/>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Conoce | Turismo Quito</title>
</head>
<body>
    <header class="big-header-explora">
        <nav>
            <a href="index.html"><img src="assets/img/logo.png" alt="logo"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="Cantos%20Pinto%20James%20Douglas.html">Bioseguridad</a></li>
                    <li><a href="Beltrán%20Santistevan%20Carlos%20Steven.html">Explora</a></li>
                    <li><a href="Reyes%20Toala%20Nefi%20Javier.html">Conoce</a></li>
                    <li><a href="Gonzalez_Espinoza_Christian_Eduardo.html">Precios</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section id="title-section">
            <h2 id="head-title">
                ¡Conoce lo mejor de Quito!
            </h2>
        </section>


        <div id="CRUD">
            <div class="box">
                <a href="FormularioReyesToalaNefi.html" action=> Eliminar </a>
            </div>
            <div class="box">
                <a href="FormularioReyesToalaNefi.html"> Consultar </a>
            </div>
            <div class="box">
                <a href="FormularioReyesToalaNefi.html"> Insertar </a>
            </div>
            <div class="box">
                <a href="FormularioReyesToalaNefi.html"> Actualizar </a>
            </div>
        </div>

        <form id="inscripciones" method="post" action="./Reyes_04_CRUD_Editar.php">
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
                            Masculino: <input type="radio" name="radiobtn" class="checkbox">
                            Femenino: <input type="radio" name="radiobtn" class="checkbox">
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
                        <input class="form-control" type="date" name="fecha" id="date">
                    </div>
                    <div class="form-group">
                        <input class="btn-submit" type="submit" name="submit" id="submit">
                    </div>
                </form>

        <?php
                if (
                    isset($_POST['id']) &&
                    isset($_POST['nombre']) &&
                    isset($_POST['apellido']) &&
                    isset($_POST['radiobtn']) &&
                    isset($_POST['edad']) &&
                    isset($_POST['fecha'])
                ) {
                    include("./conexion.php");

                    $telefono;
                    $id = $_POST['id'];
                    $nombre = $_POST['nombre'];
                    $apellidos = $_POST['apellidos'];
                    $genero = $_POST['radiobtn'];
                    $edad = $_POST['edad'];
                    $fecha = $_POST['fecha'];

                    $sql = "UPDATE registros SET
                    Nombre='$nombre', Apellido='$apellidos', Genero='$genero', edad='$edad', fecha='$fecha'
                    WHERE id = '$id';";

                    $resultado = mysqli_query($conex, $sql);

                    if ($resultado) {
                        echo "<h2>Mensaje enviado correctamente</h2>";

                        header('Location: Reyes_02_Formulario.php');
                    }
                }

                ?>

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
    <script src="assets/js/nefireyest.js"></script>
</body>
</html>