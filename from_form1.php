<?php

//Hola que hace quiere galletitas o que hace

//Mis funciones
include 'assets/php/CGE_Funciones.php';

//echo "Tiempo ".tiempo(2,0,0,0);
//echo $_t;
//El deber
if(!empty($_POST['nombre']) && !empty($_POST['apellido'])){
	//Variables por metodo POST
	$nombre        = $_POST['nombre'];
	$apellido      = $_POST['apellido'];

	setcookie("nombre",  $nombre   ,time()+tiempo(0,0,5,0), "/");//No pongo dominio porqu eno me da tiempo pa investigar ya que lo he hecho el mismo dia de la entrega todo
	setcookie("apellido",$apellido ,time()+tiempo(0,0,5,0), "/");

	header("Location: .$..\..\Gonzalez_Espinoza_Christian_Eduardo_Form_2.php");
	die();

}else{
	echo "Hola que hace, me quiere hackear o que hace";
}

/*
echo "Variable nombre      : ".$nombre        ."<br>";
echo "Variable apellido    : ".$apellido      ."<br>";

echo "Cookie nombre      : ".$_COOKIE["nombre"]    ."<br>";
echo "Cookie apellido    : ".$_COOKIE["apellido"]  ."<br>";
*/





/*
$var1="";
$var2="";
if(!empty $_POST['var1']){
	$var1 = $_POST['var1'];
	setcoockie("nombrecookie",$var1,time()+)
}
*/
?>





