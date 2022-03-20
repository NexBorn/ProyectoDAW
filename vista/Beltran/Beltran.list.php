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
                
                foreach ($resultados as $fila) {
                  ?>
                <tr>
                    <td><?php echo $fila['id_reservacion'];?></td>
                    <td><?php echo $fila['cedula_pasaporte'];?></td>
                    <td><?php echo $fila['apellidos_nombres'];?></td>
                    <td><?php echo $fila['email'];?></td>
                    <td><?php echo $fila['telefono'];?></td>
                    <td><?php echo $fila['adultos'];?></td>
                    <td><?php echo $fila['ninos'];?></td>
                    <td><?php echo $fila['reservadodesde'];?></td>
                    <td><?php echo $fila['diasreservado'];?></td>

                     <td>
                        <a class="btn btn-primary" href="index.php?c=Beltran&f=editar&id=<?php echo $fila['id_reservacion']; ?>">EDITAR</i></a>
                        <a class="btn btn-danger" onclick="if(!confirm('Esta seguro de eliminar el producto?'))return false;"  href="index.php?c=Beltran&f=eliminar&id=<?php echo  $fila['id_reservacion']; ?>">ELIMINAR</i></a>
                    </td>
				</tr>
         <?php  }?>
        </table>


        <div class="row">
        <div class="col-sm-6">
            <form action="index.php?c=Beltran&f=buscar" method="POST">
                <input type="text" name="busqueda" id="busqueda"  placeholder="buscar..."/>
                <button type="submit" class="btn btn-primary"></i>Buscar</button>
            </form>       
        </div>
        <div class="col-sm-6 d-flex flex-column align-items-end">
            <a href="index.php?c=Beltran&f=nuevo">
                <button type="button" class="btn btn-primary"></i> Nuevo</button>
            </a>
        </div>
    </div>
    </div>

</div>

<?php  require_once 'vista/templates/piedepagina.php'; ?>