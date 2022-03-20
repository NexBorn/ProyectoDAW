<?php require_once 'vista/templates/encabezado.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <form action="index.php?c=Gonzalez&f=gonzalezbuscar" method="POST">
                <input type="text" name="busqueda" id="busqueda"  placeholder="buscar..."/>
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>Buscar</button>
            </form>       
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6 d-flex flex-column align-items-end">
            <a href="index.php?c=Gonzalez&f=gonzaleznuevo"> 
                <button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Nuevo</button>
            </a>
        </div>
    </div>

        <table class="table table-striped">
            <thead class="thead-dark">
            <th>Id </th>
            <th>Nombre </th>
            <th>Apellido </th>
            <th>usuario </th>
            <th>Contraseña </th>
            </thead>
            <tbody class="tabladatos">
                <?php 
                
                foreach ($resultados as $fila) {
                  ?>
                <tr>
                    <td><?php echo $fila['id_usuario']; ?></td>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td><?php echo $fila['apellido']; ?></td>
                    <td><?php echo $fila['usuario']; ?></td>
					<td> <?php echo $fila['contrasena']; ?></td>
                    <td>
						<a class="btn btn-primary" href="index.php?c=Gonzalez&f=editar&id=<?php echo  $fila['id_usuario']; ?>"><i class="fas fa-marker"></i></a>
                        <a class="btn btn-danger" onclick="if(!confirm('Esta seguro de eliminar el producto?'))return false;"  href="index.php?c=Gonzalez&f=editar&id=<?php echo  $fila['id_usuario']; ?>"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php  }?>
            </tbody>
        </table>
</div>
<?php  require_once 'vista/templates/piedepagina.php'; ?>