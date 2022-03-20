
<?php require_once 'vista/templates/encabezado.php'; ?>

<main class="container-md" Style="padding-top: .75rem;">
    <form id="formPremio" method="post" action="Gonzalez_04_CRUD_Editar_2.php">
        <div class="align-item-center">
			<div class="input-group mb-3">
                <span class="input-group-text">Id: </span>
                <input type="text" class="form-control" placeholder="id" aria-label="id_usuario"
                       name="id_usuario"
                       aria-describedby="basic-addon1" id="id_usuario" />
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Nombres: </span>
                <input type="text" class="form-control" placeholder="Nombres" aria-label="Nombre"
                       name="nombre"
                       aria-describedby="basic-addon1" id="nombre" />
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Apellidos: </span>
                <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellidos"
                       name="apellido"
                       aria-describedby="basic-addon1" id="apellido" />
            </div>
			<div class="input-group mb-3">
                <span class="input-group-text">Usuario: </span>
                <input type="text" class="form-control" placeholder="Usuario" aria-label="Nombre"
                       name="usuario"
                       aria-describedby="basic-addon1" id="nombre" />
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Contraseña: </span>
                <input type="text" class="form-control" placeholder="Contraseña" aria-label="Apellidos"
                       name="contrasena"
                       aria-describedby="basic-addon1" id="apellido" />
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3"
                        name="enviar">
                    Agregar
                </button>
            </div>
        </div>
    </form>
</main>

<?php require_once 'vista/templates/piedepagina.php'; ?>