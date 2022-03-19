<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css">
        <title>Formulario Registro</title>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <!-- Bootstrap CSS -->  
        <link href="assets/bootstrap/css/bootstrapjames.css" rel="stylesheet">
    </head>
    <body>
        <header class="big-header-formulario">
                <?php
				include('comun/NavPrincipal.php');
				?>
				
        </header>

        <?php
        if (isset($_SESSION['mensaje']) and $_SESSION['mensaje'] != '') {
            ?>
            <div class="mt-2 alert alert-<?php echo $_SESSION['color']; ?> alert-dismissible fade show" role="alert">
                <?php echo $_SESSION['mensaje']; ?>  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <?php
            unset($_SESSION['mensaje']);
            unset($_SESSION['color']);
        }//end if 
        ?>
