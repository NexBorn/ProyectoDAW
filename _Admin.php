<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Viajes, Explora,  html" />
    <link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/comun.css">
    <title>Blog | Turismo Quito</title>
    <style>
.btn-url_nav_general{ /*Copiado de Rendon y editado por Gonzalez*/
    display: block;
    width: 160px;
    font-size: 16px;
    font-weight: 600;
    color: #0;
    cursor: pointer;
    margin: 10px auto;
    height: 25px;
    text-align:center;
    border: none;
    background-size: 300% 100%;
    border-radius: 10px;
    background-image: linear-gradient(
		to right,
		#0ba360,
		#3cba92,
		#30dd8a,
		#2bb673
    );
    box-shadow: 0 4px 15px 0 rgba(23, 168, 108, 0.75);
}
    </style>
</head>

<body>
    <header class="big-header-explora">
                <?php
				include('comun/NavPrincipal.php');
				?>
    </header>

    <main class="container-md" Style="padding-top: .75rem;">

		<ul>
			<a href="index.php" class="btn-url_nav_general">Inicio</a>
			<a href="_Deberes.php" class="btn-url_nav_general">Deberes</a>
			<a href="_URLs.php" class="btn-url_nav_general">URLs</a>
		</ul>

    </main>
    <?php
		include('Comun/Footer.php');
	?>
    

</body>

</html>



