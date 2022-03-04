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
                <a href="Reyes_04_CRUD_Eliminar.php" action=> Eliminar </a>
            </div>
            <div class="box">
                <a href="Reyes_04_CRUD_Listar.php"> Listar </a>
            </div>
            <div class="box">
                <a href="Reyes_04_CRUD_Registrar.php"> Insertar </a>
            </div>
            <div class="box">
                <a href="Reyes_04_CRUD_Editar.php"> Actualizar </a>
            </div>
        </div>

        <div>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Genero</th>
                        <th>Edad</th>
                        <th>Fecha Nacimiento</th>
                    </tr>
                    <?php


                    $conex = mysqli_connect("localhost", "root", "callofduty1", "grupo4");
                    $sql = "SELECT * FROM registros limite 10";
                    $resultados = mysqli_query($conex, $sql);


                    foreach ($resultados as $fila) {
                    ?>
                    <tr class="tabla_col_datos">
                        <td>
                            <?php echo $fila['id']; ?>
                        </td>
                        <td>
                            <?php echo $fila['Nombre']; ?>
                        </td>
                        <td>
                            <?php echo $fila['Apellido']; ?>
                        </td>
                        <td>
                            <?php echo $fila['Genero']; ?>
                        </td>
                        <td>
                            <?php echo $fila['Edad']; ?>
                        </td>
                        <td>
                            <?php echo $fila['FechaNac']; ?>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
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

        <div>

        </div>

        <div class="info-footer">

        </div>
    </footer>
    <script src="assets/js/nefireyest.js"></script>
</body>
</html>
