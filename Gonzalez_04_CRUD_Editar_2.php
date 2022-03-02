<?php
    include("CRUD_Conexion.php");

    if(isset($_POST['nombre']) && 
       isset($_POST['apellido']) && 
       isset($_POST['usuario']) && 
       isset($_POST['contrasena'])){
        
        $id_usuario = $_POST['id_usuario'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        
        $sql = "UPDATE `usuario` Set 
                nombre = '$nombre', apellido = '$apellido', usuario = '$usuario', contrasena = '$contrasena'
        WHERE id_usuario = '$id_usuario';";
		echo "</br>";
		echo $sql;
        $resultado = mysqli_query($conex, $sql);

        if($resultado){
            echo "<h2>Mensaje enviado correctamente</h2>";

            header('Location: Gonzalez_04_CRUD_Editar.php');
        }else{
			echo "<h2>Errrror en MySQL " . $resultado . "</h2>";
		}
    }

?>