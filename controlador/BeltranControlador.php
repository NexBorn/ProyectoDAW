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
        require_once 'vista/Beltran/Beltran.presentacion.php';
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
            $modelo = new BeltranDAO();
            
            // mostrar el formulario de nuevo producto
            require_once 'vista/Beltran/Beltran.nuevo.php';
        }
    }

	public function editar(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$id=htmlentities($_POST['id']);
			$cedula=htmlentities($_POST['cedula']);
            $name=htmlentities($_POST['name']);
            $email=htmlentities($_POST['email']);
            $guestelephone=htmlentities($_POST['guestelephone']);
            $adults=htmlentities($_POST['adults']);
            $children=htmlentities($_POST['children']);
            $fechadesde=htmlentities($_POST['fechadesde']);
            $diasreservado=htmlentities($_POST['diasreservado']);
			
			//llamar al modelo
			$exito = $this->modelo->actualizar($id,$cedula,$name,$email,$guestelephone,$adults,$children,$fechadesde,$diasreservado);
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
             header('Location:index.php?c=Beltran&f=listar');
         
		} else { // mostrar el formulario, cargando los datos del producto
			
			require_once 'modelo/dao/BeltranDAO.php';
			$modelo = new BeltranDAO();
            $categorias = $modelo->listar();
			
			//leeer parametros
			$id = $_GET['id'];
			
			//comunicando con el modelo
			$prod = $this->modelo->buscarxId($id);
			// mostrar el formulario de editar 
			require_once 'vista/Beltran/Beltran.editar.php';
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
