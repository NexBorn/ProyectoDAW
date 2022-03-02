<?php
function nav_crud($alumno){
echo '
<nav style=" position: absolute; top: -1rem;">
    <div class="nav-links">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="' . $alumno . '_04_CRUD_Registrar.php">Añadir</a></li>
            <li><a href="' . $alumno . '_04_CRUD_Listar.php">Listar</a></li>
            <li><a href="' . $alumno . '_04_CRUD_Editar.php">Actulizar</a></li>
            <li><a href="' . $alumno . '_04_CRUD_Eliminar.php">Eliminar</a></li>
        </ul>
    </div>
</nav>
';
}
?>