<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD</title>
    </head>
    <body>
        <?php
        include_once '../templates/header.php';
        ?>
     
        <div>
            <form method="post">
                <div> <label>Nombres:</label>
                    <input type="text" name="txtnombre">
                </div>
                <div><label>Apellidos::</label>
                    <input type="text" name="txtapellido">
                </div>
                <div>
                    <label>Email:</label>
                    <input type="email" name="txtemail">
                </div>
                <div><label>¿Esta vacunado?:</label>
                    <input type="radio" name="txtquestion">
                </div>
                <div><label>Mascarillas para el viaje:</label>
                    <input type="number" name="txtmask">
                </div>
                <div><label>Lavado de manos:</label>
                    <input type="range" name="txtrang">
                </div>
                <input type="submit" value="Agregar">
            </form>
        </div>
        <?php
      
        // incluir archivo conexion.php
        require_once '../conexion.php';


        if (!empty($_POST['txtnombre']) && !empty($_POST['txtapellido']) &&
                !empty($_POST['txtemail']) && !empty($_POST['txtquestion']) 
                && !empty($_POST['txtmask']) && !empty($_POST['txtrang'])) {

            $nombre = htmlentities($_POST['txtnombre']);
            $apellido = htmlentities($_POST['txtapellido']);
            $email = isset($_POST['txtemail']) ? htmlentities($_POST['txtemail']) : '';
            $question = htmlentities($_POST['txtquestion']);
            $mask = htmlentities($_POST['txtmask']);
            $rang = htmlentities($_POST['txtrang']);
           

            $sql = "insert into encuesta(nombre, apellido, email, question, mask, rang) "
                    . "values($nombre,'$apellido','$email','$question','$mask','$rang')";

            if (mysqli_query($con, $sql)) {// si se ejecuto sin errores
                header("location:presentar.php"); //redireccionar
            } else {
                echo "Error: " . $sql . "" . mysqli_error($con);
            }
        }
        ?>
    </body>
</html>