<?php require_once 'vista/templates/encabezado.php'; ?>

        <div>

            <form id="reservaciones" method="POST" action="index.php?c=Beltran&f=editar">
			<div class="form-body">
            <input type="hidden" name="txtid2" value="<?php echo $fila['id'] ?>">
				<div class="section1">
					<label for="cedula" class="field-label">Cedula o Pasaporte</label>
					<input type="text" name="cedula" id="cedula" class="gui-input" required="" placeholder="Cedula/Pasaporte" onkeypress="return valideKey(event);">
				</div>

				<div class="section1">
					<label for="name" class="field-label">Apellidos y nombre</label>
					<input type="text" name="name" onkeypress="return txNombres(event);" id="name" class="gui-input" required=""
						placeholder="Apellidos y nombres completos">
				</div>

				<div class="section1">
					<label for="email" class="field-label">Agregar Email</label>
					<input type="email" name="email" id="email" class="gui-input" required="required" placeholder="E-mail">
				</div>

				<div class="section1">
					<label for="guestelephone" class="field-label">Telefono/Movil</label>
					<input type="text" name="guestelephone" id="guestelephone" class="gui-input" required="" placeholder="Telefono/Celular" onkeypress="return valideKey(event);">
				</div>

				<div class="section1">
					<label for="adults" class="field-label">Numero de adultos</label>
					<input type="number" min="1" max="9" id="adults" name="adults" class="gui-input" required="" placeholder="Cantidad">
				</div>

				<div class="section1">
					<label for="children" class="field-label">Numero de niños</label>
					<input type="number" min="1" max="9" id="children" name="children" class="gui-input" required="" placeholder="Cantidad">
				</div>

				<div class="section1">
					<label for="fechadesde" class="field-label">Reservar desde:</label>
					<input type="date" id="fechadesde" name="fechadesde" class="gui-input" required="">
					<p id="msg"></p>
				</div>

				<div class="section1">
					<label for="diasreservado" class="field-label">Numero de dias:</label>
					<input type="number" min="1" max="365" id="diasreservado" name="diasreservado" class="gui-input" required="" placeholder="Numero de dias" onkeypress="return valideKey(event);">
				</div>

				<br>
				<div class="form-button">
					<button type="submit" name="submit" id="submit">ACTUALIZAR</button>
					<button type="reset">Cancelar</button>
				</div>
			</div>
		</form>

        </div>


<?php  require_once 'vista/templates/piedepagina.php'; ?>