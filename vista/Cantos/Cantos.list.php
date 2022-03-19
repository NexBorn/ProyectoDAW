<?php require_once 'vista/templates/encabezado.php'; ?>

<div class="container">
    
    <div class="table-responsive mt-2">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <th>Id</th>
                <th>Name</th>
                <th>Sur name</th>
                <th>Email</th>
                <th>Are you vaccinated?</th>
                <th>Number Mask</th>
                <th>Hand washing range</th>
                <th>Terms</th>
                <th>ACTIONS</th>
            </thead>
            <tbody class="tabladatos">

    
                <?php 
                
                foreach ($resultados as $fila) {
                  ?>
                <tr>
                    <td><?php echo $fila['id_protocolo_covid'];?></td>
                    <td><?php echo $fila['name'];?></td>
                    <td><?php echo $fila['sur_name'];?></td>
                    <td><?php echo $fila['email'];?></td>
                    <td><?php echo $fila['vacuna'];?></td>
                    <td><?php echo $fila['mask'];?></td>
                    <td><?php echo $fila['range_washs'];?></td>
                    <td><?php echo $fila['terms'];?></td>
                    <td>
                        <a class="btn btn-primary" href="index.php?c=Cantos&f=editar&id_protocolo_covid'=<?php echo  $fila['id_protocolo_covid']; ?>">EDITAR</i></a>
                        <a class="btn btn-danger" onclick="if(!confirm('Esta seguro de eliminar el producto?'))return false;"  href="index.php?c=Cantos&f=eliminar&id=<?php echo  $fila['id_protocolo_covid']; ?>">ELIMINAR</i></a>
                    </td>
                </tr>
                <?php  }?>
            </tbody>
        </table>

        <div class="row">
        <div class="col-sm-6">
            <form action="index.php?c=Cantos&f=buscar" method="POST">
                <input type="text" name="busqueda" id="busqueda"  placeholder="buscar..."/>
                <button type="submit" class="btn btn-primary"></i>Buscar</button>
            </form>       
        </div>
        <div class="col-sm-6 d-flex flex-column align-items-end">
            <a href="index.php?c=Cantos&f=nuevo">
                <button type="button" class="btn btn-primary"></i> Nuevo</button>
            </a>
        </div>
    </div>
    </div>

</div>
<?php  require_once 'vista/templates/piedepagina.php'; ?>