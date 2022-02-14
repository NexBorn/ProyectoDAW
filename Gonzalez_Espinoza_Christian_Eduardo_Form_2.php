<!-- Christian Gonzalez Espinoza  -->
<!-- Precios -->
<!DOCTYPE php>
<?php
$nombre = $_COOKIE["nombre"]    ;
$apellido = $_COOKIE["apellido"]  ;
?>
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
        .row > [class^="col-"] {
            padding-top: .75rem;
            padding-bottom: .75rem;
            background-color: rgba(39, 41, 43, 0.03);
            border: 1px solid rgba(39, 41, 43, 0.1);
        }

        .cgealert {
            position: relative;
            padding: 0.3rem 0.3rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }

        .cgecorrecto {
            color: #ad000e;
            background-color: #f36570;
            border-color: #f3061d;
        }

        .cgeerror {
            color: #447051;
            background-color: #76e4b2;
            border-color: #468368;
        }
    </style>
</head>

<body>
    <header class="big-header-explora">
        <nav>
            <a href="index.html"><img src="assets/img/logo.png" alt="logo"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="Cantos Pinto James Douglas.html">Bioseguridad</a></li>
                    <li><a href="Beltrán Santistevan Carlos Steven.html">Explora</a></li>
                    <li><a href="Reyes Toala Nefi Javier.html">Conoce</a></li>
                    <li><a href="Gonzalez_Espinoza_Christian_Eduardo.html">Precios</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container-md" Style="padding-top: .75rem;">
        <form id="formPremio" method="post" action="php.php">
            <div class="align-item-center">
				<div class="input-group mb-3">
					<span class="input-group-text">Bienvenido: <?php echo $nombre." ".$apellido;?></span>
				</div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupFile01">Carnet de vacunacion PDF</label>
                    <input type="file" class="form-control" id="documento"
                           name="documento" />
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Ciudad a viajar</label>
                    <select class="form-select" id="ciudad" name="ciudad">
                        <option selected>Choose...</option>
                        <option value="1">Guayaquil</option>
                        <option value="2">Quito</option>
                        <option value="3">La Liberdad</option>
                        <option value="4">Cuenca</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Direccion de correo electronico</label>
                    <input type="email" class="form-control" id="email" placeholder="ejemplo@ug.edu.ec"
                           name="email" />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Razones por las que quiere viajar</label>
                    <textarea class="form-control" id="razones" rows="3"
                              name="razonviaje"></textarea>
                </div>
                <label for="customRange3 mb-3" class="form-label">
                    Debe mostrar nuestra marca ¿Qué tan comprometido esta a
                    mostrar la marca?
                </label>
                <input type="range" class="form-range" min="0" max="20" step="0.5" id="rango"
                       name="mostrarmarca">
                <label for="customRange3" class="form-label">Deseos extra</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="aire" name="aire" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Aire acondicionado
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="tour" name="guardia" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Tour con guardia privado
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="bebidasme" name="metilico" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Bebidas con alcohol metilico
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="bebidaset" name="etilico" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Bebidas con alcohol etilico
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="agua" name="agua" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Solo aguita y cola
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="captus" name="captus" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Soy captus y no quiero nada liquido
                    </label>
                </div>
                <label for="customRange3" class="form-label">Escoja bien [Si es hombre/ Si es mujer] </label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="lux" id="lux" />
                    <label class="form-check-label" for="flexRadioDefault1">
                        Lux/ezreal
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="irelia" id="irelia" checked />
                    <label class="form-check-label" for="flexRadioDefault2">
                        Irelia/Akshan
                    </label>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3"
                            name="enviar">
                        Enviar
                    </button>
                </div>
            </div>
        </form>
    </main>
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
    <script type="text/javascript" src="assets/bootstrap/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/CGE_form_Funciones.js"></script>

    <script type="text/javascript" src="assets/js/CGE_form1.js"></script>
    <script>
        var form = document.querySelector("#formPremio");
        form.addEventListener('submit', validar);

		function validar(event) {
			limpiarMensajes();
			var resultado = true;
			var strResult = "";
			//var nombre = document.getElementById("nombre");
			//var apellido = document.getElementById("apellido");
			var documento = document.getElementById("documento");
			var ciudad = document.getElementById("ciudad");
			var email = document.getElementById("email");
			var razones = document.getElementById("razones");
			var rango = document.getElementById("rango");
			var aire = document.getElementById("aire");
			var tour = document.getElementById("tour");
			var bebidasme = document.getElementById("bebidasme");
			var bebidaset = document.getElementById("bebidaset");
			var agua = document.getElementById("agua");
			var captus = document.getElementById("captus");
			var lux = document.getElementById("lux");
			var irelia = document.getElementById("irelia");

			var letra = /^[a-z ,.'-]+$/i;// letrasyespacio   ///^[A-Z]+$/i;// solo letras
			var correo = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
			var telefonoreg = /^[0-9]{10}$/g; // para validar datos que deban tener 10 numeros

			resultado = evaluatxt(nombre, 0, 50, letra, "El nombre", resultado);
			resultado = evaluatxt(apellido, 0, 50, letra, "El apellido", resultado);
			resultado = evaluatxt(email, 0, 100, correo, "El correo", resultado);
			resultado = evaluafile(documento, "El archivo", resultado);
			resultado = evaluaselect(ciudad, "La ciudad", resultado);

			if (!resultado) {
				event.preventDefault();  // detener el evento  //stop form from submitting
				alert("Datos Incorrectos");
			}/* else {
				alert("Datos correctos");
			}*/
			return resultado;
		}
    </script>

</body>

</html>