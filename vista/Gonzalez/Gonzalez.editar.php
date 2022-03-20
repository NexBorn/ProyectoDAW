
<?php require_once 'vista/templates/encabezado.php'; ?>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<main class="container-md" Style="padding-top: .75rem;">
    <form id="formPremio" method="post" action="index.php?c=Gonzalez&f=gonzalezeditar">
        <div class="align-item-center">
			<div class="input-group mb-3">
                <span class="input-group-text">Id: </span>
                <input type="text" class="form-control" placeholder="id" aria-label="id_usuario"
                       name="id_usuario" value="<?php echo $proto[0]["id_usuario"]; ?>"
                       aria-describedby="basic-addon1" id="id_usuario" />
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Nombres: </span>
                <input type="text" class="form-control" placeholder="Nombres" aria-label="Nombre"
                       name="nombre" value="<?php echo $proto[0]["nombre"]; ?>"
                       aria-describedby="basic-addon1" id="nombre" />
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Apellidos: </span>
                <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellidos"
                       name="apellido" value="<?php echo $proto[0]["apellido"]; ?>"
                       aria-describedby="basic-addon1" id="apellido" />
            </div>
			<div class="input-group mb-3">
                <span class="input-group-text">Usuario: </span>
                <input type="text" class="form-control" placeholder="Usuario" aria-label="Nombre"
                       name="usuario" value="<?php echo $proto[0]["usuario"]; ?>"
                       aria-describedby="basic-addon1" id="nombre" />
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Contraseña: </span>
                <input type="text" class="form-control" placeholder="Contraseña" aria-label="Apellidos"
                       name="contrasena" value="<?php echo $proto[0]["contrasena"]; ?>"
                       aria-describedby="basic-addon1" id="apellido" />
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3"
                        name="enviar">
                    Editar
                </button>
            </div>
        </div>
    </form>
</main>

<?php require_once 'vista/templates/piedepagina.php'; ?>