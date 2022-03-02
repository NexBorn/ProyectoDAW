<?php
session_start();
//include_once "funciones.php";
if(isset($_SESSION['usuario'])){
	$nombre = $_SESSION['usuario'];
	$idProd = -1;
	if (!isset($_POST["id_producto"])) {
		exit("No hay id_producto");
	}else{
		$carrito;
		if(isset($_SESSION['carrito'])){
			echo "123";
            $informacion =$_SESSION['carrito']; 
            $carrito[] = unserialize($informacion);
        } else {
			echo "124";
            $carrito = array();
        }

        array_push($carrito, $idProd);
        $_SESSION['carrito'] = serialize($carrito);

		foreach ($carrito as $val){
			echo "val: ".$val."<br>";
		}
	}
	echo '<form action="CGE_Productos_Session_.php" >
							<input type="hidden" name="id_producto" value="1">
							<button class="button is-primary">
								<i class="fa fa-cart-plus"></i>&nbsp;regresar
							</button>
						</form>';
	//header("Location: CGE_Productos_Session_.php");
}else{
	$nombre = "No autorizado";
	header("Location: CGE_Form_Login.html");
	die();
}
?>