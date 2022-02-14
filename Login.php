<?php
session_start();

$user="cge";
$pass="123";
if(!empty($_POST['usuario']) && !empty($_POST['psw'])){
	//Variables por metodo POST
	$usuario  = $_POST['usuario'];
	$psw_     = $_POST['psw'];
	if ($user === $usuario && $pass === $psw_){
		$_SESSION['usuario']=$user;
		echo "hola";
		header("Location: CGE_Productos_Session_.php");
		die();
	}else{
		echo "usuario o contraseña incorrecta, No me quiera hackear";
	}
}else{
	echo "Errrrrrrrrrrrrrrrrror, coooorra que la compu va a explotar XD";
}
?>