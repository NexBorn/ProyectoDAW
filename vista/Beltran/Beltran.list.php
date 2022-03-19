<?php require_once 'vista/templates/encabezado.php'; ?>

<style>
        .titulo{
            text-align: center;
        }
        .contenido{
            padding:5%;
        }
        #estiloTabla{
            width: 50%;
            text-align: center;
            margin-left:20%;
            padding-top: 2%;
        }
        .cabecera, .numero{
            background-color:lightblue;
        }
        .celda{
            border:  white 1px solid;
        }
        .info{
            background-color:lightgray;
        }
        table{
            width: 100%;
            padding-bottom: 5%;
        }
    </style>

<header class="titulo">
            <div class="contenido">
                <h1>REGISTRO DE RESERVACIONES</h1>
            </div>
        </header>
        <table>
            <tr class='cabecera'>
                <td class='celda'><strong>ID</strong></td>
                <td class='celda'><strong>CEDULA O PASAPORTE</strong> </td>
                <td class='celda'><strong>APELLIDOS Y NOMBRES</strong></td>
                <td class='celda'><strong>EMAIL</strong></td>
                <td class='celda'><strong>TELEFONO</strong></td>
                <td class='celda'><strong>ADULTOS</strong></td>
                <td class='celda'><strong>NIÑOS</strong></td>
                <td class='celda'><strong>RESERVADO DESDE</strong></td>
                <td class='celda'><strong>DIAS RESERVADO</strong></td>
                <td class='celda'><strong>EDITAR</strong></td>
                <td class='celda'><strong>ELIMINAR</strong></td>
            </tr>
            <?php 
                 $consulta = "SELECT * FROM reservacion";
                 $resultado = mysqli_query($conex,$consulta);
                 while($row = mysqli_fetch_array($resultado)){
                    
                    echo "<tr>";
                    echo "<td class='celda numero'>". $row['id_reservacion']."</td>";
                    echo "<td class='celda info'>". $row['cedula_pasaporte']."</td>";
                    echo "<td class='celda info'>". $row['apellidos_nombres']."</td>";
                    echo "<td class='celda info'>". $row['email']."</td>";
                    echo "<td class='celda info'>". $row['telefono']."</td>";
                    echo "<td class='celda info'>". $row['adultos']."</td>";
                    echo "<td class='celda info'>". $row['ninos']."</td>";
                    echo "<td class='celda info'>". $row['reservadodesde']."</td>";
                    echo "<td class='celda info'>". $row['diasreservado']."</td>";
                    ?>
                    <td class='celda info' >  <a href="./Beltran_04_CRUD_Editar.php?id=<?php echo $row['id_reservacion'] ?>">EDITAR</a> </td>
                    <td class='celda info' >  <a href="./Beltran_04_CRUD_Eliminar.php?id=<?php echo $row['id_reservacion'] ?>">ELIMINAR</a> </td>
                    <?php
                    echo "</tr>";
                 }
            ?>
        </table>
        <a href='./Beltran_02_Formulario.php'><input type='button' value='VOLVER AL INICIO'></a>


<?php  require_once 'vista/templates/piedepagina.php'; ?>