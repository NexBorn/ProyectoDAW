<?php
    include("Beltran_04_CRUD__Conexion.php");
    if(isset($_POST['cedula']) &&
        isset($_POST['name']) &&
        isset($_POST['email']) &&
        isset($_POST['guestelephone']) &&
        isset($_POST['adults']) &&
        isset($_POST['children']) &&
        isset($_POST['fechadesde']) &&
        isset($_POST['diasreservado'])){
        
            $cedula=$_POST['cedula'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            $guestelephone=$_POST['guestelephone'];
            $adults=$_POST['adults'];
            $children=$_POST['children'];
            $fechadesde=$_POST['fechadesde'];
            $diasreservado=$_POST['diasreservado'];
            $consulta="INSERT INTO reservacion(cedula_pasaporte, apellidos_nombres, email, telefono, adultos, ninos, reservadodesde,  diasreservado) 
            VALUES ('$cedula','$name','$email','$guestelephone','$adults','$children','$fechadesde','$diasreservado')";
            $resultado = mysqli_query($conex,$consulta);
            if($resultado){
                ?>
                <h3>Guardado exitoso en la BD</h3>
               <a href='./Beltran_04_CRUD_Listar.php'><input type='button' value='MOSTRAR TODOS'></a>
                <?php
            }else{
                ?>
                <h3>Ha ocurrido un error en la bd, no se ha registrado</h3>
                <?php
            }
            
        }
?>