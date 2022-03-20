<?php require_once 'vista/templates/encabezado.php'; ?>

       <div>
            <form method="post" action="index.php?c=Beltran&f=editar">
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
	

<?php  require_once 'vista/templates/piedepagina.php'; ?>