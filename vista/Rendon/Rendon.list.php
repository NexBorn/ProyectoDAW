<?php require_once 'vista/templates/encabezado.php'; ?>
<main>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Asunto</th>
            <th>Mensaje</th>
        </tr>
<?php
	foreach ($resultados as $fila) {													?>
		<tr class="tabla_col_datos">
			<td>
				<?php echo $fila['id']; ?>
			</td>
			<td>
				<?php echo $fila['nombre']; ?>
			</td>
			<td>
				<?php echo $fila['apellidos']; ?>
			</td>
			<td>
				<?php echo $fila['telefono']; ?>
			</td>
			<td>
				<?php echo $fila['correo']; ?>
			</td>
			<td>
				<?php echo $fila['asunto']; ?>
			</td>
			<td>
				<?php echo $fila['mensaje']; ?>
			</td>
		</tr>																			<?php
    }
?>
    </table>
    </div>
</main>
<?php  require_once 'vista/templates/piedepagina.php'; ?>