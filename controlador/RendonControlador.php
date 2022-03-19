<?php

require_once 'modelo/dao/RendonDAO.php';

class RendonControlador {

    private $modelo;

    public function __construct() {
        $this->modelo = new RendonDAO(); //modelo/dao/RendonDAO.php
    }

    // funciones del controlador
    public function index() {
        // llamar al modelo
        // No va esto porque aqui va la presentacion $resultados = $this->modelo->listar();

        //llamo a la vista
        require_once 'vista/Rendon/Rendon.Presentacion.php';
    }
	public function listar() {
        // llamar al modelo
        $resultados = $this->modelo->listar();

        // comunicarnos a la vista
        require_once 'vista/Rendon/Rendon.list.php';
    }
	
	public function buscar() {
        // leer parametros
        $busqueda = $_POST['busqueda'];

        //comunica con el modelo
        $resultados = $this->modelo->buscar($busqueda);

        // comunicarnos a la vista
        require_once 'vista/Rendon/Rendon.list.php';
    }
	
    public function nuevo() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {// guardar
        // verificaciones
               //if(!isset($_POST['codigo'])){ header('');}
            // leer parametros
            $id_protocolo_covid = htmlentities($_POST['id_protocolo_covid']);
            $name = htmlentities($_POST['name']);
            $sur_name = htmlentities($_POST['sur_name']);
            $email = htmlentities($_POST['email']);
            $vacuna = htmlentities($_POST['vacuna']);
            $mask = htmlentities($_POST['mask']);
            $range_washs = htmlentities($_POST['range_washs']);
            $terms = htmlentities($_POST['terms']);
            
            //llamar al modelo
            $exito = $this->modelo->insertar($id_protocolo_covid, $name, $sur_name,$email,$vacuna, $mask, $range_washs,$terms);
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
               header('Location:index.php?c=Rendon&f=index');
           
        } else { // mostrar el formulario

            require_once 'modelo/dao/RendonDAO.php';
            $mod = new RendonDAO();
            
            // mostrar el formulario de nuevo producto
            require_once 'vista/Rendon/Rendon.nuevo.php';
        }
    }

    public function editar(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {// actualizar
      // verificaciones
             
          // leer parametros
            $id_protocolo_covid = htmlentities($_POST['id_protocolo_covid']);
            $name = htmlentities($_POST['name']);
            $sur_name = htmlentities($_POST['sur_name']);
            $email = htmlentities($_POST['email']);
            $vacuna = htmlentities($_POST['vacuna']);
            $mask = htmlentities($_POST['mask']);
            $range_washs = htmlentities($_POST['range_washs']);
            $terms = htmlentities($_POST['terms']);
          //$usu = 'usuario'; //$_SESSION['usuario'];
         
          //llamar al modelo
          $exito = $this->modelo->actualizar($id_protocolo_covid, $name, $sur_name,$email,$vacuna, $mask, $range_washs,$terms);
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
             header('Location:index.php?c=Rendon&f=index');
         
      } else { // mostrar el formulario, cargando los datos del producto

          require_once 'modelo/dao/RendonDAO.php';
          $mod = new RendonDAO();
       
          //leeer parametros
          $id_protocolo= $_REQUEST['id_protocolo_covid']; 
          
          //comunicando con el modelo
         $proto = $this->modelo->buscarxId($id_protocolo);
          // mostrar el formulario de editar producto
          require_once 'vista/Rendon/Rendon.editar.php';
      }
  }
  
  public function eliminar(){
      
       //leeer parametros
          $id= $_REQUEST['id'];
        //  $usu= 'usuario';//$_SESSION['usuario'];
       //comunicando con el modelo
       $exito = $this->modelo->eliminar($id);
      $msj = 'Producto eliminado exitosamente';
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
             header('Location:index.php?c=Rendon&f=index');
  }

}