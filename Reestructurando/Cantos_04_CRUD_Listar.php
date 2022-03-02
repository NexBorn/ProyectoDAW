<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css">
        <title>Bioseguridad | Turismo Quito</title>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
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
    </head>
    <body>
        <div id="container">   
            <div class="Header">
                <?php
				include('comun/NavPrincipal.php');
				?>
				<?php
				include('comun/Nav_CRUD.php');
				nav_crud('Cantos');
				?>
            </div>
            
	<main>

        <table>
            <tr>
                <th>Id_protocolo_covid</th>
                <th>Name</th>
                <th>Sur_name</th>
                <th>Email</th>
                <th>Vacuna</th>
                <th>Mask</th>
                <th>Range_washs</th>
                <th>Terms</th>
            </tr>
            <?php

            include("CRUD_Conexion.php");
            $sql = "SELECT * FROM protocolo_covid";
            $resultados = mysqli_query($conex, $sql);


            foreach ($resultados as $fila) {
            ?>
                <tr class="tabla_col_datos">
                    <td>
                        <?php echo $fila['id_protocolo_covid']; ?>
                    </td>
                    <td>
                        <?php echo $fila['name']; ?>
                    </td>
                    <td>
                        <?php echo $fila['sur_name']; ?>
                    </td>
                    <td>
                        <?php echo $fila['email']; ?>
                    </td>
                    <td>
                        <?php echo $fila['vacuna']; ?>
                    </td>
                    <td>
                        <?php echo $fila['mask']; ?>
                    </td>
                    <td>
                        <?php echo $fila['range_washs']; ?>
                    </td>
                    <td>
                        <?php echo $fila['terms']; ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
        </div>

    </main>		
			
            <div class="Footer-James">
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
            </div>
        </div>
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
    </body>
</html>
