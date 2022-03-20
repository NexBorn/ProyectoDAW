<?php require_once 'vista/templates/encabezado.php'; ?>

       <div>

            <form method="POST" action="index.php?c=Beltran&f=editar">
                <input type="hidden" name="id" id="id" value="<?php echo $prod['id_reservacion']; ?>"/>
                <div><label>Cedula o pasaporte:</label><input type="text" name="cedula" value="<?php echo $prod['cedula_pasaporte'] ?>"></div>
                <div><label>Apellidos y nombres:</label><input type="text" name="name" value="<?php echo $prod['apellidos_nombres'] ?>"></div>
                <div><label>Email:</label><input type="email" name="email" value="<?php echo $prod['email'] ?>"></div>
                <div><label>Telefono:</label><input type="text" name="guestelephone" value="<?php echo $prod['telefono'] ?>"></div>
                <div><label>Adultos:</label><input type="number" name="adults" value="<?php echo $prod['adultos'] ?>"></div>
                <div><label>Niños:</label><input type="number" name="children" value="<?php echo $prod['ninos'] ?>"></div>
                <div><label>Reservado desde:</label><input type="date" name="fechadesde" value="<?php echo $prod['reservadodesde'] ?>"></div>
                <div><label>Dias reservado:</label><input type="number" name="diasreservado" value="<?php echo $prod['diasreservado'] ?>"></div>
                <div><input type="submit" value="Actualizar"></div>
            </form>
        </div>
	

<?php  require_once 'vista/templates/piedepagina.php'; ?>
