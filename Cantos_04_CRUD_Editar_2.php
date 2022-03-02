<?php
    include("CRUD_Conexion.php");

	if(isset($_POST['id_protocolo_covid']) &&
       isset($_POST['name']) &&
       isset($_POST['sur_name']) &&
       isset($_POST['email']) &&
       isset($_POST['vacuna']) &&
       isset($_POST['mask']) &&
       isset($_POST['range_washs']) &&
       isset($_POST['terms'])){
        $id_protocolo_covid = $_POST['id_protocolo_covid'];
        $name = $_POST['name'];
        $sur_name = $_POST['sur_name'];
        $email = $_POST['email'];
        $vacuna = $_POST['vacuna'];
        $mask = $_POST['mask'];
        $range_washs = $_POST['range_washs'];
        $terms = $_POST['terms'];
		
		$sql = "UPDATE `protocolo_covid` Set 
                    name = '$name', sur_name = '$sur_name', email = '$email', vacuna = '$vacuna', mask = '$mask', range_washs = '$range_washs', terms = '$terms'
            WHERE id_protocolo_covid = '$id_protocolo_covid';";
		
		echo "</br> sql = " . $sql . "</br>";
		
		$resultado = mysqli_query($conex, $sql);
		
        if($resultado){
            echo "<h2>Mensaje enviado correctamente</h2>";

            header('Location: Cantos_04_CRUD_Editar.php');
        }else{
			echo "<h2>Errrror en MySQL " . $resultado . "</h2>";
		}
    }else{
		echo "<h2>Errrror</h2>";
	}

        

?>