<!-- Gonzalez Session HTMl->Beltran Santistevan Steven  -->
<!-- Explora -->
<?php
session_start();
if(isset($_SESSION['usuario'])){
	$nombre = $_SESSION['usuario'];
}else{
	$nombre = "No autorizado";
	header("Location: Gonzalez_03_CookieSession_Login_Formulario.php");
	die();
}
?>
<!DOCTYPE php>
<?php

?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Viajes, Explora,  html" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
        .container .card:hover {
            transform: translateY(-15px);
            box-shadow: 0 12px 16px;
        }

        .btn-reservar {
            display: block;
            width: 160px;
            font-size: 16px;
            font-weight: 600;
            color: black;
            cursor: pointer;
            margin: 80px auto;
            height: 55px;
            text-align: center;
            border: none;
            background-size: 300% 100%;
            border-radius: 50px;
            background-image: linear-gradient(to right, #0ba360, #3cba92, #30dd8a, #2bb673)
        }

        .imagenturismo {
            text-align: center;
        }

        .tituloPrincipal {
            font-family: 'Open Sans', sans-serif;
            padding-top: 2%;
            padding-bottom: 2%;
            font-size: 35px;
            text-align: center;
        }

        .imagenes div {
            display: inline-block;
            padding: 5px;
        }

        .activa {
            border: 2px solid blue;
            width: 66px;
            height: 66px;
        }
    </style>
    <title>Explora | Turismo Quito</title>
</head>

<body>
    <header class="big-header-explora">
				<?php
				include('comun/NavPrincipal.php');
				?>
    </header>

    <main>
        <section>
            <div class="input-group mb-3">
				<span class="input-group-text">Bienvenido: <?php echo $nombre;?></span>
			</div>
            <p class="parrafoIntro ">
                <br>
                "Hay lugares donde uno se queda, y lugares que quedan en uno"
            </p>
            <h2>Zonas turisticas de Quito</h2>
            <section>
                <div class="container">
                    <div class="card">
                        <a><img src="assets/img/mitad_mundo-exp.jpg" alt="mitad_mundo"></a>
                        <h4>Centro del mundo</h4>
                        <p>
                            Uno de los lugares mas visitados en Quito es el monumento «Ciudad Mitad del Mundo”. Existen
                            varios
                            museos donde se a conocer como se determina la exacta posición del Ecuador.
                        </p>
						<form action="agregar_al_carrito.php" method="post">
							<input type="hidden" name="id_producto" value="1">
							<button class="button is-primary">
								<i class="fa fa-cart-plus"></i>&nbsp;Agregar
							</button>
						</form>
                    </div>

                    <div class="card">
                        <img src="assets/img/catedral.png" alt="catedral">
                        <h4>Catedral Metropolitana de Quito</h4>
                        <p>
                            Templo católico ubicado en el Centro Histórico de la ciudad. Es la sede de la Arquidiócesis
                            Primada de Quito
                            y ocupa todo el flanco sur de la Plaza de la Independencia de la ciudad.
                        </p>
                        <form action="agregar_al_carrito.php" method="post">
							<input type="hidden" name="id_producto" value="2">
							<button class="button is-primary">
								<i class="fa fa-cart-plus"></i>&nbsp;Agregar
							</button>
						</form>
                    </div>

                    <div class="card">
                        <img src="assets/img/iglesia_compañia.png" alt="iglesia">
                        <h4>Iglesia de la Compañía de Jesus</h4>
                        <p>
                            Es otro lugar con mucha historia en Quito y es una de las joyas del barroco en America. Su
                            interior esta
                            casi todo cubierto de laminas de oro.
                        </p>
                        <form action="agregar_al_carrito.php" method="post">
							<input type="hidden" name="id_producto" value="3">
							<button class="button is-primary">
								<i class="fa fa-cart-plus"></i>&nbsp;Agregar
							</button>
						</form>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="card">
                        <img src="assets/img/panecillo.png" alt="panecillo">
                        <h4>El Panecillo</h4>
                        <p>
                            Este lugar corta la ciudad en dos, dividiéndola en Norte y Sur. Desde allí se ven los barrios
                            típicos y
                            el centro histórico.
                        </p>
                        <form action="agregar_al_carrito.php" method="post">
							<input type="hidden" name="id_producto" value="4">
							<button class="button is-primary">
								<i class="fa fa-cart-plus"></i>&nbsp;Agregar
							</button>
						</form>
                    </div>

                    <div class="card">
                        <img src="assets/img/mercado.png" alt="mercado">
                        <h4> El mercado San Francisco</h4>
                        <p>
                            Es donde se puede conseguir las más variadas plantas medicinales, como así también frutas,
                            artesanías y comidas
                            regionales.
                        </p>
                        <form action="agregar_al_carrito.php" method="post">
							<input type="hidden" name="id_producto" value="5">
							<button class="button is-primary">
								<i class="fa fa-cart-plus"></i>&nbsp;Agregar
							</button>
						</form>
                    </div>

                    <div class="card">
                        <img src="assets/img/capilla.png" alt="capilla">
                        <h4>La Capilla del Hombre</h4>
                        <p>
                            En este lugar, el artista Oswaldo Guayasamin fue destacado en Ecuador y de América
                            Latina, logro manifestar la ira, la protesta y sus sueños, a través de sus pinturas.
                        </p>
                        <form action="agregar_al_carrito.php" method="post">
							<input type="hidden" name="id_producto" value="6">
							<button class="button is-primary">
								<i class="fa fa-cart-plus"></i>&nbsp;Agregar
							</button>
						</form>
                    </div>
                </div>
            </section>

            <h2>Intereses turisticos</h2>
            <section>
                <div class="container">
                    <div class="card">
                        <a><img src="assets/img/turismo_lujo.png" alt="lujo"></a>
                        <h4>Turismo de lujo</h4>
                        <p>Ven y conoce todo lo mejor de lugares turisticos y de lujo.</p>
                        <form action="agregar_al_carrito.php" method="post">
							<input type="hidden" name="id_producto" value="7">
							<button class="button is-primary">
								<i class="fa fa-cart-plus"></i>&nbsp;Agregar
							</button>
						</form>
                    </div>

                    <div class="card">
                        <img src="assets/img/turismo_romance.png" alt="romance">
                        <h4>Turismo de romance</h4>
                        <p>Nada mejor que disfrutar en pareja y conoce juntoa es esa persona especial.</p>
                        <form action="agregar_al_carrito.php" method="post">
							<input type="hidden" name="id_producto" value="8">
							<button class="button is-primary">
								<i class="fa fa-cart-plus"></i>&nbsp;Agregar
							</button>
						</form>
                    </div>

                    <div class="card">
                        <img src="assets/img/turismo_aventura.png" alt="aventura">
                        <h4>Turismo de aventura</h4>
                        <p>Aventurate a conocer lugares sensacionales que te haran divertir.</p>
                        <form action="agregar_al_carrito.php" method="post">
							<input type="hidden" name="id_producto" value="9">
							<button class="button is-primary">
								<i class="fa fa-cart-plus"></i>&nbsp;Agregar
							</button>
						</form>
                    </div>
                </div>
            </section>

            <h2>Explora y disfruta</h2>
            <section>
                <div class="container">
                    <div class="card">
                        <a><img src="assets/img/gastronomia.png" alt="gastronomia"></a>
                        <h4>Gastronomia</h4>
                        <p>
                            Ecuador no deja de sorprender a quienes descubren por primera vez las deliciosas comidas, y
                            Quito es perfecto para descubrir los sabores de distintos platos típicos del país.
                        </p>
                        <form action="agregar_al_carrito.php" method="post">
							<input type="hidden" name="id_producto" value="10">
							<button class="button is-primary">
								<i class="fa fa-cart-plus"></i>&nbsp;Agregar
							</button>
						</form>
                    </div>

                    <div class="card">
                        <img src="assets/img/moderno.png" alt="moderno">
                        <h4>Quito moderno</h4>
                        <p>
                            El Quito moderno fue creado para diferir de la construcción colonial que dominó la ciudad por
                            más de 300 años.se mantiene fresco y creativo, renovándose y actualizándose a cada paso.
                        </p>
                        <form action="agregar_al_carrito.php" method="post">
							<input type="hidden" name="id_producto" value="11">
							<button class="button is-primary">
								<i class="fa fa-cart-plus"></i>&nbsp;Agregar
							</button>
						</form>
                    </div>

                    <div class="card">
                        <img src="assets/img/andes.png" alt="andes">
                        <h4>Andes</h4>
                        <p>
                            Ecuador es un parque de aventuras, uno de los países ideales para realizar deportes extremos
                            o salir al encuentro de una naturaleza, siempre llena de sorpresas.
                        </p>
                        <form action="agregar_al_carrito.php" method="post">
							<input type="hidden" name="id_producto" value="12">
							<button class="button is-primary">
								<i class="fa fa-cart-plus"></i>&nbsp;Agregar
							</button>
						</form>
                    </div>
                </div>
            </section>


            <section>
                <h4 class="parrafoFinal ">Guias descargables</h4>
                <span class="cajas">
                    Guia 1:
                    <a download="Guia1" href="assets/download/guia1.pdf">Descargar guia</a>
                    Esta guia cuenta con todos los detalles para viajar por Quito y disfrutar su turismo.
                </span>
                <span class="cajas">
                    Guia 2:
                    <a download="Guia2" href="assets/download/guia2.pdf">Descargar guia</a>
                    Esta guia contiene descripciones y historias de lugares muy populares de Quito.
                </span>
                <span class="cajas">
                    Guia 3:
                    <a download="Guia3" href="assets/download/guia1.pdf">Descargar guia</a>
                    Esta guia tiene informacion de lugares mas visitados y recomendados de Quito.
                </span>

            </section>
            <section>
                <h4 class="parrafoFinal ">Formulario - reservacion de hotel</h4>
                <a class="btn-reservar" href="Formulario%20Beltran%20Carlos.html">Reserva tu habitacion de hotel</a>
            </section>
            <section class="imagenturismo">
                <script>
                    function galeria(imagen) {
                        const listImagenes= document.querySelectorAll(".imagenes");
                        document.ampliar.src = imagen.src;
                        listImagenes.forEach( (img)=>{
                            img.classList.remove('activa');
                        });
                        imagen.classList.add('activa');
                    }
                </script>

                <h3 class="tituloPrincipal">"Paisajes turisticos de Quito"</h3>
                <img class="imagenes" src="assets/img/turism1.jpg" alt="" width="400" height="400" name="ampliar" id="ampliar" />
                <div>
                    <img class="imagenes" src="assets/img/turism1.jpg" alt="" width="100" height="60" onclick="galeria(this);" />
                    <img class="imagenes" src="assets/img/turism2.jpg" alt="" width="100" height="60" onclick="galeria(this);" />
                    <img class="imagenes" src="assets/img/turism3.jpg" alt="" width="100" height="60" onclick="galeria(this);" />
                    <img class="imagenes" src="assets/img/turism4.jpg" alt="" width="100" height="60" onclick="galeria(this);" />
                </div>
            </section>
            <p class="parrafoFinal ">Por Beltran Santistevan Carlos Steven</p>
            <br>
        </section>
    </main>
    <div></div>
    <footer>
        <img class="logo" src="assets/img/logo.png" alt="logo">
        <div class="social-networks">
            <div>
                <img src="assets/img/facebook.png" alt="">
                <span>Facebook</span>
            </div>
            <div>
                <img src="assets/img/instagram.png" alt="">
                <span>Instagram</span>
            </div>
            <div>
                <img src="assets/img/twitter.png" alt="">
                <span>Twitter</span>
            </div>
        </div>
        <div class="info-footer">
        </div>
    </footer>
</body>
</html>