<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Turismo Quito | Inicio</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
        nav{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        
        .lugar-info{
            display: block;
        }
        
        .contenedor-lugares{
            display: grid;
            row-gap: 20px;
            grid-template-columns: 1fr;
        }

        .lugar-info p {
            margin: 20px 30px 0 30px;
            min-width: 200px;
        }

        .contenedor-lugares img{
            width: 60%;
            margin: auto;
        }

        .contenedor-imagen{
            text-align: center;
        }

        .timer-bar{
            position: relative;
            width: 60%;
            top: -1rem;
            left: 20%;
            overflow: hidden;
        }

        .timer-bar::after{
            content: "";
            position: relative;
            display: inline-block;
            top: -0.5rem;
            width: 100%;
            height: 100%;
            border-bottom: 0.5rem solid #2bb673;
            animation: timerAnim 5s linear infinite;
        }	

        @keyframes timerAnim {
            0%{
                transform: translate(-100%, 0) ;
            }

            100%{
                transform: translate(0, 0) ;
            }
        }

        footer{
            display: grid;
        }

        .mas-info{
            margin-top: 20px;
        }
    
        .btn-mas-info{
            display: block;
            width: 160px;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
            margin: 80px auto;
            height: 55px;
            text-align:center;
            border: none;
            background-size: 300% 100%;
            border-radius: 50px;
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
    <header class="big-header big-header-2">
        <?php
        include('vista/templates/NavPrincipal.php');
        ?>
    </header>
    <div class="main-text">
        <h1>Visita <a href="https://twitter.com/hashtag/Quito?src=hashtag_click" target="none" class="green-hashtag">#Quito</a></span></h1>
    </div>
    <main>
        <section class="lugares">
            <h2>
                Lugares Turísticos
            </h2>
            <div class="contenedor-lugares">

                <div>
                    <h3>El teleférico</h3>
                    <div class="lugar-info">
                        <p>El teleférico es uno de lugares turísticos de Quito que no debes dejar de visitar.Es uno de los más altos de
                            Sudamérica: su recorrido de 18 minutos aproximadamente comienza a 3.000 metros y culmina a los 4.100. Desde esas
                            alturas tienes impresionantes vistas panorámicas de la ciudad y sus alrededores.  El viaje en telecabina dura alrededor de 18 minutos en los que se recorre 2,5 kilómetros y se puede observar la diferencia de vegetación por la altura, hasta llegar al ecosistema de páramo andino.</p>
                    </div>
                </div>
                <div class="contenedor-imagen">
                    <img src="assets/img/iglesia_san_francisco.jpg" class="galeria-1">
                    <div class= "timer-bar"></div>
                </div>

                <div>
                    <h3>Mitad del Mundo</h3>
                    <div class="lugar-info">
                        <p>En uno de los lugares del Ecuador más famosos, el monumento se erige como una referencia obligatoria. Mide treinta
                            metros y fue construido con hierro y cemento y cubierto con una hermosa piedra pulida y tallada llamada andesita. En su
                            cúspide hay un globo terráqueo de 5 toneladas y de 4,5 metros de circunferencia.
                            
                            En las cercanías hay varios atractivos como la Plaza Cultural con banquitos tipo anfiteatros en donde se realizan
                            conciertos los fines de semana. Pero si buscas lugares románticos en Quito, la ciudad tiene una capilla donde se
                            efectúan enlaces matrimoniales. Hay ofertas gastronómicas como la Plaza del Cacao. Ahí se puede conocer cómo es la
                            producción, la preparación y el consumo del fruto.</p>
                    </div>
                </div>
                <div class="contenedor-imagen">
                    <img src="assets/img/iglesia_san_francisco.jpg" class="galeria-2">
                    <div class= "timer-bar"></div>
                </div>

                <div>
                    <h3>Iglesia de San Francisco</h3>
                    <div class="lugar-info">
                        <p>El complejo de la plaza, la iglesia y el convento de San Francisco abarcan tres hectáreas y media. Se le considera el
                            recinto religioso de mayores dimensiones de la urbe y el conjunto arquitectónico de mayor tamaño dentro de los
                            centros históricos de toda América. De ahí su apodo de “el escorial del nuevo mundo”.
                            
                            Hay varias razones que hacen a la edificación uno de los atractivos turísticos de Quito: en el altar mayor está la
                            virgen realizada por Bernardo de Legalda; dentro del complejo arquitectónico hay más de 3.500 obras de arte
                            colonial; además, el recinto tiene una biblioteca franciscana, la cual fue descrita en el siglo XVII como la mejor
                            del Virreinato del Perú</p>
                            
                    </div>
                </div>
                <div class="contenedor-imagen">
                    <img src="assets/img/iglesia_san_francisco.jpg" class="galeria-3">
                    <div class= "timer-bar"></div>
                </div>

            </div>
        </section>

        <section class="mas-info">
            <a href="index.php?c=Rendon&f=listar"><button class="btn-mas-info">Mas información</button></a>
        </section>
    </main>
<?php
	require_once 'vista/templates/piedepagina.php';
?>