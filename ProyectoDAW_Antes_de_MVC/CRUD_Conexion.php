<?php
	//Pasos paar cambiar contraseña
	// windows+R colocar CMD
	// mysql -u root -p
	// mysql> use mysql;
	// mysql> update user set password=PASSWORD("root") where User='root';
	// mysql> flush privileges;
	// mysql> quit.
	
    // Editar datos para conectar a su bd
    $conex = mysqli_connect("localhost", "root", "root", "grupo2");
?>