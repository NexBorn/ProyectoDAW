
<!DOCTYPE php>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Viajes, Explora,  html" />
	<link rel="stylesheet" href="assets/css/styles.css">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<title>Blog | Turismo Quito</title>
	<style>
		.row>[class^="col-"] {
			padding-top: .75rem;
			padding-bottom: .75rem;
			background-color: rgba(39, 41, 43, 0.03);
			border: 1px solid rgba(39, 41, 43, 0.1);
		}
	</style>
</head>

<body>
	<header class="big-header-explora">
                <?php
				include('comun/NavPrincipal.php');
				?>
	</header>
	<main class="container-md">
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
					aria-current="true" aria-label="Basilica Nacional"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
					aria-label="Plaza Grande"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
					aria-label="Iglesia de la Compañia"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
					aria-label="Plaza de San Francisco"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="assets\img\cge_quito_basilica_nacional.png" class="d-block w-100" alt="Basilica Nacional">
					<div class="carousel-caption d-none d-md-block">
						<h5>Basilica Nacional</h5>
					</div>
				</div>
				<div class="carousel-item">
					<img src="assets\img\cge_quito_casa_gangotena_plaza_grande.png" class="d-block w-100" alt="Plaza Grande">
					<div class="carousel-caption d-none d-md-block">
						<h5>Plaza Grande</h5>
					</div>
				</div>
				<div class="carousel-item">
					<img src="assets\img\cge_quito_iglesia_de_la_compania.png" class="d-block w-100" alt="Iglesia de la Compañia">
					<div class="carousel-caption d-none d-md-block">
						<h5>Iglesia de la Compañia</h5>
					</div>
				</div>
				<div class="carousel-item">
					<img src="assets\img\cge_quito_plaza_de_san_francisco.png" class="d-block w-100"
						alt="Plaza de San Francisco">
					<div class="carousel-caption d-none d-md-block">
						<h5>Plaza de San Francisco</h5>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
				data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
				data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
		<div class="row align-item-center">
			<div class="col-sm-4">
				<div class="card">
					<div class="card-body">
						<p class="h3 text-center">Guayaquil</p>
					</div>
					<div class="card-body">
						<img src="assets\img\Ecuador-Guayaquil-FaroSantaAna.jpg" class="card-img-top"
							alt="Ecuador-Guayaquil-FaroSantaAna">
					</div>
					<div class="card-body">
						<h5 class="card-title">Guayaquil Faro Santa Ana</h5>
						<p class="card-text">Guayaquil Puerto Hermoso de amplias calles y avenidas.</p>
						<p>
							<button class="btn btn-primary" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseGuayaquil" aria-expanded="false"
								aria-controls="collapseExample">
								Consultar
							</button>
						</p>
						<div class="collapse" id="collapseGuayaquil">
							<div class="card card-body">
								Precio por ruta
								<p>$ 260.00
								<p>
							</div>
						</div>
						<p class="card-text"><small class="text-muted">Actualizado, hace tiempo</small></p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<div class="card-body">
						<p class="h3 text-center">Quito</p>
					</div>
					<div class="card-body">
						<img src="assets\img\Quito-2.jpg" class="card-img-top" alt="Ecuador Quito no se donde">
					</div>
					<div class="card-body">
						<h5 class="card-title">Quito alguna calle</h5>
						<p class="card-text">La carita de Dios donde el Sol asoma y cuando menos piensas, ya estas
							mojado.</p>
						<p>
							<button class="btn btn-primary" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseQuito" aria-expanded="false" aria-controls="collapseExample">
								Consultar
							</button>
						</p>
						<div class="collapse" id="collapseQuito">
							<div class="card card-body">
								Precio por ruta
								<p>$ 152.97
								<p>
							</div>
						</div>
						<p class="card-text"><small class="text-muted">Actualizado, hace tiempo</small></p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<div class="card-body">
						<p class="h3 text-center">Cuenca</p>
					</div>
					<div class="card-body">
						<img src="assets\img\Chola_cuencana.jpg" class="card-img-top" alt="Chola Cuencana">
					</div>
					<div class="card-body">
						<h5 class="card-title">Chola cuencana</h5>
						<p class="card-text">Por el precio de un paseo lleve su recuerdo con la Chola cuencana.</p>
						<p>
							<button class="btn btn-primary" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseCuenca" aria-expanded="false" aria-controls="collapseExample">
								Consultar
							</button>
						</p>
						<div class="collapse" id="collapseCuenca">
							<div class="card card-body">
								Precio por ruta no incluye a la chola
								<p>$ 92.91
								<p>
									Precio por ruta con la chola
								<p>$ 174.96
								<p>
									Precio por ruta con la chola y algo mas
								<p>$ 398.90
								<p>
							</div>
						</div>
						<p class="card-text"><small class="text-muted">Actualizado, hace tiempo</small></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row align-item-center">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<p class="h3 text-center">Santa Elena</p>
					</div>
					<div class="card-body">
						<img src="assets\img\Santa Elena-2.jpg" class="card-img-top" alt="Santa Elena Iglesia">
					</div>
					<div class="card-body">
						<h5 class="card-title">Santa Elena Iglesia</h5>
						<p class="card-text">Lugar e aventuras (sin ella) pero de aventuras en sus aguas Pacificas.</p>
						<p>
							<button class="btn btn-primary" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseSaltaElena" aria-expanded="false"
								aria-controls="collapseExample">
								Consultar
							</button>
						</p>
						<div class="collapse" id="collapseSaltaElena">
							<div class="card card-body">
								Precio por ruta
								<p>$ 180.00
								<p>
							</div>
						</div>
						<p class="card-text"><small class="text-muted">Actualizado, hace tiempo</small></p>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<p class="h3 text-center">Galapagos</p>
					</div>
					<div class="card-body">
						<img src="assets\img\Galapagos.jpg" class="card-img-top"
							alt="Ecuador Galapados muuuuuy lejos de tierras continentales">
					</div>
					<div class="card-body">
						<h5 class="card-title">Galapagos puerto</h5>
						<p class="card-text">Te diviertes, distraes y luego te quieres quedar pero no se puede vivir si
							no se es residente nativo o las mismas especies raras te desalojan. El lugar mas Pacifico en
							el que puedas estar</p>
						<p>
							<button class="btn btn-primary" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseGalapagos" aria-expanded="false"
								aria-controls="collapseExample">
								Consultar
							</button>
						</p>
						<div class="collapse" id="collapseGalapagos">
							<div class="card card-body">
								Precio por ruta
								<p>$ 1055.95
								<p>
							</div>
						</div>
						<p class="card-text"><small class="text-muted">Actualizado, hace tiempo</small></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-auto">
			<form method="get" action="index.php?c=Gonzalez&f=nuevo">
				<button type="submit" class="btn btn-primary mb-3">Ir a formulario de premios</button>
			</form>
		</div>
        <div class="col-auto">
            <form method="get" action="probandorefexp.html">
                <button type="submit" class="btn btn-primary mb-3">Ir a Prueba de RegExp</button>
            </form>
        </div>
        <div class="col-auto">
            <form method="get" action="CGE_Form_Login.html">
                <button type="submit" class="btn btn-primary mb-3">Ir a Session</button>
            </form>
        </div>
	</main>
	<script type="text/javascript" src="assets/bootstrap/js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    
<?php
	require_once 'vista/templates/piedepagina.php';
?>