<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <?php
           include_once '../templates/header.php';
        
        // incluir archivo conexion.php
        require_once '../conexion.php';
     
        if (!empty($_GET['email'])) {
            $id = htmlentities($_GET['email']);
            $sql = "select * from usuarios where email = $email";
            $resultado = mysqli_query($con, $sql);

            while ($fila = mysqli_fetch_assoc($resultado)) {
                ?>
                <div>
                    <form method="post">
                        <label>Id:</label><input type="email" name="txtemail" readonly 
                                                 value="<?php echo $fila['email'] ?>" readonly>
                       <label>Usuario:</label><input type="text" name="txtnombre" 
                                                     value="<?php echo $fila['nombre'] ?>" readonly>
                     
                         <label>Nombres:</label><input type="text" name="txtapellido" 
                                                     value="<?php echo $fila['apellido'] ?>" readonly>
                     
                       
                       <input type="submit" value="Eliminar">
                    </form>

                </div>
            <?php
            }
        }
        ?>
        <?php
        if (isset($_POST['txtemail']) && !empty($_POST['txtemail'])) {
            $email = htmlentities($_POST['txtemail']);

            $sql = "delete from encuesta where email = $email ";

          if(mysqli_query($con, $sql)){
                 header("location:presentar.php");
              
          }else{
              
              
          }

         
        }
        ?>


    </body>
</html>