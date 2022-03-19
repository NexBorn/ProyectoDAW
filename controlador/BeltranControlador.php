<?php

require_once 'modelo/dao/BeltranDAO.php';

class BeltranControlador {

    private $modelo;

    public function __construct() {
        $this->modelo = new BeltranDAO();
    }

    // funciones del controlador
    public function index() {
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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {// guardar
        // verificaciones
               //if(!isset($_POST['codigo'])){ header('');}
            //leer parametros
            /*$id_protocolo_covid = htmlentities($_POST['id_protocolo_covid']);
            $name = htmlentities($_POST['name']);
            $sur_name = htmlentities($_POST['sur_name']);
            $email = htmlentities($_POST['email']);
            $vacuna = htmlentities($_POST['vacuna']);
            $mask = htmlentities($_POST['mask']);
            $range_washs = htmlentities($_POST['range_washs']);
            $terms = htmlentities($_POST['terms']);*/

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
               header('Location:index.php?c=Cantos&f=index');
           
        } else { // mostrar el formulario

            require_once 'modelo/dao/BeltranDAO.php';
            $mod = new CantosDAO();
            
            // mostrar el formulario de nuevo producto
            require_once 'vista/Beltran/Beltran.nuevo.php';
        }
    }

    public function editar(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {// actualizar
      // verificaciones
             
          // leer parametros
            /*$id_protocolo_covid = htmlentities($_POST['id_protocolo_covid']);
            $name = htmlentities($_POST['name']);
            $sur_name = htmlentities($_POST['sur_name']);
            $email = htmlentities($_POST['email']);
            $vacuna = htmlentities($_POST['vacuna']);
            $mask = htmlentities($_POST['mask']);
            $range_washs = htmlentities($_POST['range_washs']);
            $terms = htmlentities($_POST['terms']);*/
          //$usu = 'usuario'; //$_SESSION['usuario'];

            $cedula=htmlentities($_POST['cedula']);
            $name=htmlentities($_POST['name']);
            $email=htmlentities($_POST['email']);
            $guestelephone=htmlentities($_POST['guestelephone']);
            $adults=htmlentities($_POST['adults']);
            $children=htmlentities($_POST['children']);
            $fechadesde=htmlentities($_POST['fechadesde']);
            $diasreservado=htmlentities($_POST['diasreservado']);
         
          //llamar al modelo
          $exito = $this->modelo->actualizar($cedula,$name,$email,$guestelephone,$adults,$children,$fechadesde,$diasreservado);
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
             header('Location:index.php?c=Cantos&f=index');
         
      } else { // mostrar el formulario, cargando los datos del producto

          require_once 'modelo/dao/BeltranDAO.php';
          $mod = new CantosDAO();
       
          //leeer parametros
          $id_reservacion= $_REQUEST['id_reservacion']; 
          
          //comunicando con el modelo
         $proto = $this->modelo->buscarxId($id_reservacion);
          // mostrar el formulario de editar producto
          require_once 'vista/Beltran/Beltran.editar.php';
      }
  }
  
  public function eliminar(){
      
       //leeer parametros
       $id= $_REQUEST['id'];
        //  $usu= 'usuario';//$_SESSION['usuario'];
       //comunicando con el modelo
       $exito = $this->modelo->eliminar($id);
      $msj = 'Eliminado exitosamente';
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
             header('Location:index.php?c=Beltran&f=index');
  }

}
