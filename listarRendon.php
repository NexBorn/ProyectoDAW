<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Turismo Quito | Listar Rendon</title>
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

        /* Tabla de datos */

        table td {
            padding: 1rem;
            margin: 0;
        }


        .tabla_col_datos:hover {
            background-color: rgb(230, 230, 230);
        }
    </style>
    <script src="https://kit.fontawesome.com/324a9c7d86.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="big-header big-header-2">
        <nav>
            <a href="index.html"><img src="assets/img/logo.png" alt="logo"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="Cantos Pinto James Douglas.html">Bioseguridad</a></li>
                    <li><a href="Beltrán Santistevan Carlos Steven.html">Explora</a></li>
                    <li><a href="Reyes Toala Nefi Javier.html">Conoce</a></li>
                    <li><a href="Gonzalez_Espinoza_Christian_Eduardo.html">Precios</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>

        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Asunto</th>
                <th>Mensaje</th>
            </tr>
            <?php



            $conex = mysqli_connect("localhost", "root", "admin", "grupo2");
            $sql = "SELECT * FROM mas_informacion";
            $resultados = mysqli_query($conex, $sql);


            foreach ($resultados as $fila) {
            ?>
                <tr class="tabla_col_datos">
                    <td>
                        <?php echo $fila['id']; ?>
                    </td>
                    <td>
                        <?php echo $fila['nombre']; ?>
                    </td>
                    <td>
                        <?php echo $fila['apellidos']; ?>
                    </td>
                    <td>
                        <?php echo $fila['telefono']; ?>
                    </td>
                    <td>
                        <?php echo $fila['correo']; ?>
                    </td>
                    <td>
                        <?php echo $fila['asunto']; ?>
                    </td>
                    <td>
                        <?php echo $fila['mensaje']; ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
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
    <script src="assets/js/frmRendon.js"></script>
</body>

</html>