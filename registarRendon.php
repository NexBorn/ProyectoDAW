<?php
    include("./conexion.php");

    if(isset($_POST['nombre']) &&
        isset($_POST['apellidos']) &&
        isset($_POST['correo']) &&
        isset($_POST['asunto']) &&
        isset($_POST['mensaje'])
    ){

        $telefono;

        if(isset($_POST['telefono'])){
            $telefono = $_POST['telefono'];
        }else{
            $telefono = '';
        }

        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $correo = $_POST['correo'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];

        $sql = "INSERT INTO mas_informacion (`nombre`, `apellidos`, `telefono`, `correo`, `asunto`, `mensaje`) 
                VALUES ('$nombre', '$apellidos', '$telefono', '$correo', '$asunto', '$mensaje');";

        $resultado = mysqli_query($conex, $sql);

        if($resultado){
            echo "<h2>Mensaje enviado correctamente</h2>";

            header('Location: FormularioRendónIván.php');
        }

    }

?>
