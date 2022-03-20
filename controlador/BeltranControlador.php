<?php

require_once 'modelo/dao/BeltranDAO.php';

class BeltranControlador {

    private $modelo;

    public function __construct() {
        $this->modelo = new BeltranDAO();
    }

    // funciones del controlador
    public function index() {
        //llamo a la vista
        require_once 'vista/Beltran/Beltran.Presentacion.php';
    }

	public function listar() {
        // llamar al modelo
        $resultados = $this->modelo->listar();

        //llamo a la vista
        require_once 'vista/Beltran/Beltran.list.php';
    }
	
    public function buscar() {
        // leer parametros
        $busqueda = $_POST['busqueda'];

        //comunica con el modelo
        $resultados = $this->modelo->buscar($busqueda);

        // comunicarnos a la vista
        require_once 'vista/Beltran/Beltran.list.php';
    }

    public function nuevo() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $cedula=htmlentities($_POST['cedula']);
            $name=htmlentities($_POST['name']);
            $email=htmlentities($_POST['email']);
            $guestelephone=htmlentities($_POST['guestelephone']);
            $adults=htmlentities($_POST['adults']);
            $children=htmlentities($_POST['children']);
            $fechadesde=htmlentities($_POST['fechadesde']);
            $diasreservado=htmlentities($_POST['diasreservado']);
            
            //llamar al modelo
            $exito = $this->modelo->insertar($cedula,$name,$email,$guestelephone,$adults,$children,$fechadesde,$diasreservado);
            $msj = 'Guardado exitosamente';
            $color = 'primary';
            if (!$exito) {
                $msj = "No se pudo realizar el guardado";
                $color = "danger";
            }
             if(!isset($_SESSION)){ session_start();};
            $_SESSION['mensaje'] = $msj;
            $_SESSION['color'] = $color;
			//llamar a la vista
			//  $this->index();
			header('Location:index.php?c=Beltran&f=listar');
           
        } else { // mostrar el formulario

            require_once 'modelo/dao/BeltranDAO.php';
            $mod = new BeltranDAO();
            
            // mostrar el formulario de nuevo producto
            require_once 'vista/Beltran/Beltran.nuevo.php';
        }
    }

	
	public function editar(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$id_reervacion=htmlentities($_POST['id']);
			
			$cedula=htmlentities($_POST['cedula']);
            $name=htmlentities($_POST['name']);
            $email=htmlentities($_POST['email']);
            $guestelephone=htmlentities($_POST['guestelephone']);
            $adults=htmlentities($_POST['adults']);
            $children=htmlentities($_POST['children']);
            $fechadesde=htmlentities($_POST['fechadesde']);
            $diasreservado=htmlentities($_POST['diasreservado']);
			
			//llamar al modelo
			$exito = $this->modelo->actualizar($id_reervacion, $cedula,$name,$email,$guestelephone,$adults,$children,$fechadesde,$diasreservado);
			$msj = 'Información actualizada exitosamente';
			$color = 'primary';
			if (!$exito) {
				$msj = "No se pudo realizar la actualizacion";
				$color = "danger";
			}
			if(!isset($_SESSION)){ session_start();};
			$_SESSION['mensaje'] = $msj;
			$_SESSION['color'] = $color;
			//llamar a la vista
			//  $this->index();
             header('Location:index.php?c=Beltran&f=index');
		} else {
			require_once 'modelo/dao/BeltranDAO.php';
			
			//leeer parametros
			$id_reservacion= $_REQUEST['id'];
			//comunicando con el modelo
			$resultados = $this->modelo->buscarxId($id_reservacion);
			
			echo "resu ".$resultados;
			// foreach ($resultados as $fila) {
                // //$cedula=		$fila['cedula_pasaporte'];
                // // $name=			$fila['apellidos_nombres'];
                // // $email=			$fila['email'];
                // // $guestelephone=	$fila['telefono'];
                // // $adults=		$fila['adultos'];
                // // $children=		$fila['ninos'];
                // // $fechadesde=	$fila['reservadodesde'];
                // // $diasreservado=	$fila['diasreservado'];
				// echo "cedula= ".$cedula;
			// }
			
			// mostrar el formulario de editar producto
			//require_once 'vista/beltran/beltran.editar.php';
		} /*else {
			echo "errrrrrrrrrrrrrrrrrrrrrrrrrrrror";
		}*/
	}
	
	public function editar2(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$id_reervacion=htmlentities($_POST['id']);
			
			$cedula=htmlentities($_POST['cedula']);
            $name=htmlentities($_POST['name']);
            $email=htmlentities($_POST['email']);
            $guestelephone=htmlentities($_POST['guestelephone']);
            $adults=htmlentities($_POST['adults']);
            $children=htmlentities($_POST['children']);
            $fechadesde=htmlentities($_POST['fechadesde']);
            $diasreservado=htmlentities($_POST['diasreservado']);
			
			//llamar al modelo
			$exito = $this->modelo->actualizar($id_reervacion, $cedula,$name,$email,$guestelephone,$adults,$children,$fechadesde,$diasreservado);
			$msj = 'Información actualizada exitosamente';
			$color = 'primary';
			if (!$exito) {
				$msj = "No se pudo realizar la actualizacion";
				$color = "danger";
			}
			if(!isset($_SESSION)){ session_start();};
			$_SESSION['mensaje'] = $msj;
			$_SESSION['color'] = $color;
			//llamar a la vista
			//  $this->index();
             header('Location:index.php?c=Beltran&f=index');
         
		} else {
			echo "Errrrrrrrrrrrrrrrrrrrrrrrrrrrror";
		}
	}
  
	public function eliminar(){
		//leeer parametros
		$id = $_REQUEST['id'];
		//  $usu= 'usuario';//$_SESSION['usuario'];
		//comunicando con el modelo
		$exito = $this->modelo->eliminar($id);
		$msj = 'Eliminado exitosamente';
		$color = 'primary';
		if (!$exito) {
			$msj = "No se pudo eliminar la actualizacion";
			$color = "danger";
		}
		if(!isset($_SESSION)){
			session_start();
		};
		$_SESSION['mensaje'] = $msj;
		$_SESSION['color'] = $color;
		//llamar a la vista
		//  $this->index();
		header('Location:index.php?c=Beltran&f=listar');
	}

}
