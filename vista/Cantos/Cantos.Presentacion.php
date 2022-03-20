<?php
	$tittle = "Hola que hace";
	require_once 'vista/templates/encabezado.php';
?>
<style>
    .Center img{
        width: 100%;
        height: 200px;
        display: block;
        margin-left: auto;
        margin-right: auto;

    }
    .Footer-James{
        clear: both;
        min-height: 20px;
        margin-top: 50px;
        background-image: linear-gradient( rgba(13, 39, 56, 0.7), rgba(4,9,30,1)), url(../img/footer_quito.jpg);
        background-position: center;
        background-size: cover;
        display: flex;
        flex-flow: row wrap;
        justify-content: space-around;
        gap: 30px;
	}
</style>
<div id="container">
    <div class="High-Center">
        <section class="protocolos">
            <h1 style="font-size:25px; color:#8FCB9B; padding-bottom:10px;" >Protocolos de Bioseguridad para el turismo en Quito</h1>
                <video controls autoplay muted class="video">
                    <source  src="assets/videos/protocolos.mp4" type="video/mp4">
                </video>
                <p>Debido a la pandemia del COVID 19, el sector turismo se vio afectado con una gran cantidad de 
                    perdida de ingresos,asi que se vieron obligados a realizar 
                    una serie de cambios, actualmente se dispone de una gran cantidad de protocolos
                    que se dispone para evitar contagios en el sector turistico de Quito.
                </p>
        </section> 
    </div>
    <div class="Center">
            <div class="protocolo">
                <h2>Uso de Mascarillas</h2>
                    <img src="assets/img/masks.png"  alt="mascarillas">
                    <p>La mascarilla debe cubrir boca y nariz y se debe desechar
                        una vez que esta mojada, sucia, depositándola en el recipiente dispuesto para el manejo
                        de desechos, preferiblemente utilizar mascarillas tipo NK-95 y no mascarillas de tela.
                        Cambiar la mascarilla.
                    </p>
            </div>
            <div class="protocolo">
                <h2>Distanciamiento</h2>
                    <img src="assets/img/distanciamiento.png" alt="distanciamiento">
                    <p>Los guias de turismo deben procurar mantener el distanciamiento entre personas de un máximo de 2
                        metros, especialmente si estás no son del grupo del que se encuentra a cargo,evitar cualquier
                        tipo de contacto durante todo el trayecto del viaje.
                    </p>
            </div>
            <div class="protocolo">
                <h2>Higiene de manos</h2>
                    <img src="assets/img/higiene-manos.png" alt="Higiene de manos">
                    <p>Aumento de la frecuencia de lavado de manos con una duración mínima de cuarenta (40)
                        segundos en cada lavada, y desinfección de las mismas con alcohol o alcohol gel al 70%,
                        hacer esto cada hora luego de cada descanso propuesto por el guia turistico, una ves hecho
                        el lavado de manos correctamente, secar con toalla limpia para dejar seca las manos.
                    </p>
            </div>
            <div class="protocolo">
                <h2>PCR Negativo</h2>
                    <img src="assets/img/negativo.png" alt="pcr-negativo">
                    <p>Los pasajeros que viajen por turismo, deben presentar una prueba PCR para 
                        COVID-19 con resultado negativo, realizada hasta 96 horas previas al ingreso a la provincia de Quito,
                        todo pasajero que no esta con prueba PCR negativo, no podra realizar las actividades
                        establecidas y permanecera en cuarenta por 15 días en el hotel más cercano.
                    </p>
            </div>   
    </div>
    <div class="Left">
        <div class="slider_contenedor">
            <section class="contenido_slider">
                <div>
                    <h3>JUNTOS LOGRAMOS</h3>             
                </div>
                <img src="assets/img/bus1.png" alt="desinfectando bus">
            </section>
            <section class="contenido_slider">
                <div>
                    <h3>QUE SE REACTIVE</h3>            
                </div>
                <img src="assets/img/bus.png" alt="turistas en bus">
            </section>
            <section class="contenido_slider">
                <div>
                    <h3>EL TURISMO EN QUITO</h3>
                </div>
                <img src="assets/img/turismas.webp" alt="turistas">
            </section>
            <section class="contenido_slider">
                <div>
                    <h3>JUNTOS LOGRAMOS</h3>            
                </div>
                <img src="assets/img/bus1.png" alt="desinfectando bus">
            </section>
        </div> 
    </div>
    <div class="Right">
        <h4 style="font-size:20px; color:#8FCB9B; text-align: center; margin-top:5px;">Encuesta de protocolos para viaje seguro</h4>
            <p>Tu seguridad es importante para nosotros,por eso decidimos crear este formulario
                en el cual podemos validar si usted cumple con los protocolos necesarios
                para acceder a nuestro viaje.Tu salud es importante para cuidarnos entre todos.
            </p>
            <a id="link" href="index.php?c=Cantos&f=cantosnuevo">Realizar Encuesta</a>
			<a id="link" href="index.php?c=Cantos&f=cantoslistar">listar</a>
    </div>
    <div class="Footer-James">
    </div>
</div>
<?php
	require_once 'vista/templates/piedepagina.php';
?>
<script>
    let slider = document.querySelector(".slider_contenedor");
    let sliderIndividual = document.querySelectorAll(".contenido_slider");
    let cont=1;
    let width=sliderIndividual[0].clientWidth;
    const intervale_max=3000;
    const intervale_min=1500;

    window.addEventListener("resize",()=>{
        width=sliderIndividual[0].clientWidth;
    });

    setInterval(()=>{
        slides();
    },intervale_max);

    const slides = ()=>{
        slider.style.transform="translate("+(-width*cont)+"px)";
        slider.style.transition="transform .8s";
        cont++;
            if(cont==sliderIndividual.length){
                setTimeout(()=>{
                    slider.style.transform="translate(0px)";
                    slider.style.transition="transform 0s";
                    cont=1;
                },intervale_min)
            }
         }
</script>
