<?php
    include("./CRUD_Conexion.php");

    if(isset($_POST['nombre']) &&
        isset($_POST['apellidos']) &&
        isset($_POST['genero']) &&
        isset($_POST['edad']) &&
        isset($_POST['fecha'])
    ){
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $genero = $_POST['genero'];
        $edad = $_POST['edad'];
        $fecha = $_POST['fecha'];

        $sql = "INSERT INTO registros (`Nombre`, `Apellido`, `Genero`, `edad`, `FechaNac`)
                VALUES ('$nombre', '$apellidos', '$genero', '$edad', '$fecha');";

        $resultado = mysqli_query($conex, $sql);

        if($resultado){
            //echo '<script> alert("Datos Incorrectos"); </script>';
			echo "<h2>Mensaje enviado correctamente</h2>";
            header('Location: Reyes_02_Formulario.php');
        }

    }

?>