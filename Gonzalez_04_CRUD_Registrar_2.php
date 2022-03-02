<?php
    include("CRUD_Conexion.php");

    if(isset($_POST['nombre']) && 
       isset($_POST['apellido']) && 
       isset($_POST['usuario']) && 
       isset($_POST['contrasena'])){
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contrasena'];
        
		$sql = "INSERT INTO `usuario` ( `id_usuario`, `nombre`, `apellido`, `usuario`, `contrasena`)
        VALUES(NULL, '" . $nombre . "', '" . $apellido . "', '" . $usuario . "', '" . $contraseña . "');";
		echo "</br>";
		echo $sql;
        $resultado = mysqli_query($conex, $sql);

        if($resultado){
            echo "<h2>Mensaje enviado correctamente</h2>";

            header('Location: Gonzalez_04_CRUD_Registrar.php');
        }else{
			echo "<h2>Errrror en MySQL " . $resultado . "</h2>";
		}
    }

?>