<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD PROTOCOLOS</title>
        <style>table {
                border: #b2b2b2 1px solid;
            }
            td, th {
                border: #b2b2b2 1px solid;
            }</style>
    </head>
    <body>
         <h1>Usuarios</h1>
        
        <?php  
        include_once '../templates/header.php';
        
        // incluir archivo conexion.php
        require_once '../conexion.php';
        // require    
        //include
        //include_once
       
        
        $sql = "select * from encuesta";
        $resultado = mysqli_query($con, $sql);
        ?>

        <div>
          
            <table>
                <thead>
                    <tr>
                        <th>Nombres:</th>
                        <th>Apellidos:</th>
                        <th>Email</th>
                        <th>Esta vacunado</th>
                        <th>Mascarillas para el viaje</th>
                        <th>Lavado de manos</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        ?>
                        <tr>
                            <td><?php echo $fila['nombre'] ?></td>
                            <td><?php echo $fila['apellido'] ?></td>
                            <td><?php echo $fila['email'] ?></td>
                            <td><?php echo $fila['question'] ?></td>
                            <td><?php echo $fila['mask']?></td>
                            <td><?php echo $fila['rang']?></td>
                            <td>
                                <a href="editar.php?id=<?php echo $fila['id'] ?>">Editar</a>
                               
                                <a href="eliminar.php?id=<?php echo $fila['id'] ?>">Eliminar</a>
                               
                             <?php  //echo  "<a href='eliminar.php?id=".$fila['id']."'>Editar</a>";
                                ?>


                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="agregar.php">Agregar</a>
        </div>

    </body>
</html>