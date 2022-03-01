<?php
   include_once '../templates/header.php';
        
        // incluir archivo conexion.php
        require_once '../conexion.php';
     
if (isset($_GET['email'])) {
    $id = htmlentities($_GET['email']);

    $sql = "select * from encuesta where email = '" . $email . "'";
    $resultado = mysqli_query($con, $sql);
    while ($fila = mysqli_fetch_assoc($resultado)) {
        ?>
        <div>
            <form method="post">
                <input type="hidden" name="txtemail2" value="<?php echo $fila['email'] ?>">
                <div><label>Nombres:</label><input type="text" name="txtnombre" readonly value="<?php echo $fila['nombre'] ?>"></div>
                <div><label>Apellidos:</label><input type="text" name="txtusuario" value="<?php echo $fila['apellido'] ?>"></div>
                <div><label>Email:</label><input type="email" name="txtemail" value="<?php echo $fila['email'] ?>"></div>
                <div><label>¿Esta vacunado?:</label><input type="radio" name="txtquestion" value="<?php echo $fila['question'] ?>"></div>
                <div><label>Mascarillas para el viaje:</label><input type="number" name="txtmask" value="<?php echo $fila['mask'] ?>"></div>
                <div><label>Lavado de manos:</label><input type="range" name="txtrang" value="<?php echo $fila['rang'] ?>"></div>
 

                <div><input type="submit" value="Actualizar"></div>
            </form>
        </div>
    <?php
    }
}
?>


<?php
if (!empty($_POST['txtemail']) && !empty($_POST['txtnombre']) && !empty($_POST['txtapellido']) && !empty($_POST['txtquestion']) && !empty($_POST['txtmask'])) {
    $nombre = htmlentities($_POST['txtnombre']);
    $apellido = htmlentities($_POST['txtapellido']);
    $email = htmlentities($_POST['txtemail']);
    $question = htmlentities($_POST['txtquestion']);
    $mask = htmlentities($_POST['txtmask']);
    $rang = htmlentities($_POST['txtrang']);


    $sql2 = "update encuesta set nombre =$nombre, apellido ='$apellido', email = '$email', 
    question = '$question',"  . " mask = '$mask', rang=  '$rang'  where email=$email";

    if (mysqli_query($con, $sql2)) {
        // echo "Registro ingresado correctamente";
        header("location:presentar.php"); //redireccionar
    } else {
        echo "Error: " . $sql2 . "" . mysqli_error($con);
    }
}
?>