<?php

require_once 'modelo/dao/GonzalezDAO.php';

class GonzalezControlador {

    private $modelo;

    public function __construct() {
        $this->modelo = new GonzalezDAO();
    }

    // funciones del controlador
    public function index() {
        //llamo a la vista
        require_once 'vista/Gonzalez/Gonzalez.Presentacion.php';
    }
	
	public function gonzalezlistar() {
		$resultados = $this->modelo->listar();
        //llamo a la v
        require_once 'vista/Gonzalez/Gonzalez.list.php';
    }

	public function gonzaleznuevo() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {// guardar
        // verificaciones
               //if(!isset($_POST['codigo'])){ header('');}
            // leer parametros
			$id_usuario = 0;
			$nombre = htmlentities($_POST['nombre']);
			$apellido = htmlentities($_POST['apellido']);
			$usuario = htmlentities($_POST['usuario']);
			$contrasena = htmlentities($_POST['contrasena']);
            
            //llamar al modelo
            $exito = $this->modelo->insertar($id_usuario, $nombre, $apellido, $usuario, $contrasena);
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
               header('Location:index.php?c=Gonzalez&f=gonzalezlistar');
           
        } else { // mostrar el formulario

            require_once 'modelo/dao/GonzalezDAO.php';
            $mod = new GonzalezDAO();
            
            // mostrar el formulario de nuevo producto
            require_once 'vista/Gonzalez/Gonzalez.nuevo.php';
        }
    }

    public function gonzalezeditar(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {// actualizar
			// verificaciones
				 
			// leer parametros
            $id_usuario = htmlentities($_POST['id_usuario']);
			$nombre = htmlentities($_POST['nombre']);
			$apellido = htmlentities($_POST['apellido']);
			$usuario = htmlentities($_POST['usuario']);
			$contrasena = htmlentities($_POST['contrasena']);
			
			//llamar al modelo
			$exito = $this->modelo->actualizar($id_usuario, $nombre, $apellido, $usuario, $contrasena);
			$msj = 'Informaci??n actualizada exitosamente';
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
			header('Location:index.php?c=Gonzalez&f=gonzalezlistar');
         
		} else { // mostrar el formulario, cargando los datos del producto
			
			require_once 'modelo/dao/GonzalezDAO.php';
			$mod = new GonzalezDAO();
			
			//leeer parametros
			$id= $_REQUEST['id']; 
			//comunicando con el modelo
			$proto = $this->modelo->buscar_id($id);
			
			echo "lariable";
			var_dump($proto[0]["id_usuario"]);
			// mostrar el formulario de editar producto
			require_once 'vista/Gonzalez/Gonzalez.editar.php';
		}
	}
  
	public function gonzalezeliminar(){
		//leeer parametros
		$id= $_REQUEST['id'];
		//  $usu= 'usuario';//$_SESSION['usuario'];
		//comunicando con el modelo
		$exito = $this->modelo->eliminar($id);
		$msj = 'Item eliminado exitosamente';
		$color = 'primary';
		if (!$exito) {
			$msj = "No se pudo eliminar la actualizacion";
			$color = "danger";
		}
		if(!isset($_SESSION)){ session_start();};
		$_SESSION['mensaje'] = $msj;
		$_SESSION['color'] = $color;
		//llamar a la vista
		//  $this->index();
        header('Location:index.php?c=Gonzalez&f=gonzalezlistar');
	}
	
	public function gonzalezbuscar() {
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$nombre= $_REQUEST['busqueda'];
			$resultados = $this->modelo->buscar($nombre);
			//llamo a la v
			require_once 'vista/Gonzalez/Gonzalez.list.php';
		}
    }
}
