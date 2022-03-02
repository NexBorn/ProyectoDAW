<?php
include_once ("Beltran_04_CRUD__Conexion.php");
if (isset($_GET['id'])) {
    $id = htmlentities($_GET['id']);


    $sql = "select * from reservacion where id_reservacion = '" . $id . "'";
    $resultado = mysqli_query($conex, $sql);
    while ($fila = mysqli_fetch_assoc($resultado)) {
        ?>
        <div>
            <form method="post">
                <input type="hidden" name="txtid2" value="<?php echo $fila['id'] ?>">
                <div><label>Id:</label><input type="text" name="txtid" readonly value="<?php echo $fila['id_reservacion'] ?>"></div>
                <div><label>Cedula o pasaporte:</label><input type="text" name="cedula" value="<?php echo $fila['cedula_pasaporte'] ?>"></div>
                <div><label>Apellidos y nombres:</label><input type="text" name="name" value="<?php echo $fila['apellidos_nombres'] ?>"></div>
                <div><label>Email:</label><input type="email" name="email" value="<?php echo $fila['email'] ?>"></div>
                <div><label>Telefono:</label><input type="text" name="guestelephone" value="<?php echo $fila['telefono'] ?>"></div>
                <div><label>Adultos:</label><input type="number" name="adults" value="<?php echo $fila['adultos'] ?>"></div>
                <div><label>Niños:</label><input type="number" name="children" value="<?php echo $fila['ninos'] ?>"></div>
                <div><label>Reservado desde:</label><input type="date" name="fechadesde" value="<?php echo $fila['reservadodesde'] ?>"></div>
                <div><label>Dias reservado:</label><input type="number" name="diasreservado" value="<?php echo $fila['diasreservado'] ?>"></div>
                <div><input type="submit" value="Actualizar"></div>
            </form>
        </div>
    <?php
    }
}
?>

<?php
if (isset($_POST['txtid']) && isset($_POST['cedula']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['guestelephone']) 
&& isset($_POST['adults'])  && isset($_POST['children']) && isset($_POST['fechadesde']) && isset($_POST['diasreservado'])) {
    $id = htmlentities($_POST['txtid']);
    $cedula = htmlentities($_POST['cedula']);
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $guestelephone = htmlentities($_POST['guestelephone']);
    $adults = htmlentities($_POST['adults']);
    $children = htmlentities($_POST['children']);
    $fechadesde = htmlentities($_POST['fechadesde']);
    $diasreservado = htmlentities($_POST['diasreservado']);

    $sql2 = "update reservacion set cedula_pasaporte ='$cedula', apellidos_nombres ='$name', email = '$email', telefono = '$guestelephone',
    adultos = '$adults', ninos = '$children', reservadodesde = '$fechadesde', diasreservado = '$diasreservado' where id_reservacion=$id";

    if (mysqli_query($conex, $sql2)) {
        header("location:listarBeltran.php"); //redireccionar
    } else {
        echo "Error: " . $sql2 . "" . mysqli_error($conex);
    }
}
?>