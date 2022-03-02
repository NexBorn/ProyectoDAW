<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/styles.css">
	<style>
	.unaimagen{
		text-align: center;
		width: 700px;
		height: 300px;
	}
	</style>
	<script src="assets/js/frmBeltranS.js"></script>
	<title>Formulario - Registro de reservacion</title>
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<link rel="stylesheet" href="path/to/css/smart-forms.css">
	<link rel="stylesheet" href="path/to/css/font-awesome.min.css">
</head>

<body>
	<header class="big-header-formulario">
		<?php
        include('comun/NavPrincipal.php');
        ?>
	</header>
	<main>
		<div class="encabezadoform">
			<h2>Hotel Dann Carlton Quito</h2>
			<a
				href="https://www.booking.com/hotel/ec/dann-carlton-quito.es.html?aid=318615;label=New_Spanish_ES_EC_26746206505-bT2sBRUnFlfBej4X6poGEgS100755045025%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi2652769282%3Atiaud-294889296933%3Adsa-302866489863%3Alp20261%3Ali%3Adec%3Adm;sid=827826d509dcb58a391e3b2a34776bcf;atlas_src=sr_iw_title;dest_id=-932573;dest_type=city;dist=0;group_adults=2;group_children=0;no_rooms=1;room1=A%2CA%2C;sb_price_type=total;type=total;ucfs=1&">
				<img class="unaimagen" src="assets/img/hotel.PNG" alt="hotel"> <br>
				Toca la imagen para mas informacion</a>
			<p>El Quito Dann Carlton ofrece alojamiento elegante a 1 hora en coche del aeropuerto Mariscal Sucre.</p>
		</div>
		<form id="reservaciones" method="POST" action="./registrarBeltran.php">
			<div class="form-body">
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
					<button type="submit" name="submit" id="submit">Confirmar reservacion</button>
					<button type="reset">Cancelar</button>
				</div>
				<a href='./listarBeltran.php'><input type='button' value='VER REGISTRADOS'></a>
			</div>
		</form>
		<br>
		<div>
			<footer>
				<img class="logo" src="assets/img/logo.png" alt="logo">
				<div class="social-networks">
					<div>
						<img src="assets/img/facebook.png" alt="facebook">
						<span>Facebook</span>
					</div>
					<div>
						<img src="assets/img/instagram.png" alt="instagram">
						<span>Instagram</span>
					</div>
					<div>
						<img src="assets/img/twitter.png" alt="twitter">
						<span>Twitter</span>
					</div>
				</div>
				<div class="info-footer">
				</div>
			</footer>
		</div>
	</main>
</body>
</html>
