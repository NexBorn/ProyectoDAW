<?php

require_once 'config/Conexion.php';

class GonzalezDAO {

    private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }

    
    public function listar() {
        // sql de la sentencia
        $sql = "select * from productos, categoria where prod_idCategoria = cat_id and prod_estado=1";
        //preparacion de la sentencia
        $stmt = $this->con->prepare($sql);
        //ejecucion de la sentencia
        $stmt->execute();
        //recuperacion de resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // retorna datos para el controlador
        return $resultados;
    }

    public function insertar($cod, $nom, $desc, $estado, $precio, $idCat, $usu) {
        //sentencia sql
        $sql = "INSERT INTO productos (prod_id, prod_codigo, prod_nombre, prod_descripcion, prod_estado, prod_precio, 
            prod_idCategoria, prod_usuarioActualizacion, prod_fechaActualizacion) VALUES 
            (NULL, :cod, :nom, :desc, :estado, :precio, :idCat, :usu, :fecha)";
       
        //bind parameters
        $sentencia = $this->con->prepare($sql);
        $fechaActual = new DateTime('NOW');
        $strfecha = $fechaActual->format('Y-m-d H:i:s');
        $data = [
            'cod' => $cod,
            'nom' => $nom,
            'desc' => $desc,
            'estado' => $estado,
            'precio' => $precio,
            'idCat' => $idCat,
            'usu' => $usu,
            'fecha' => $strfecha
        ];
        //execute
        $sentencia->execute($data);
        //retornar resultados, 
        if ($sentencia->rowCount() <= 0) {// verificar si se inserto 
            //rowCount permite obtner el numero de filas afectadas
            return false;
        }
        return true;
    }

    public function actualizar() {
        
    }

    public function eliminar() {
        
    }

    public function buscar($parametro) {
          // sql de la sentencia
        $sql = "SELECT * FROM productos, categoria  where prod_idCategoria = cat_id and prod_estado=1  and 
		(prod_nombre like :b1 or cat_nombre like :b2)";
        $stmt = $this->con->prepare($sql);
        // preparar la sentencia
        $conlike = '%' . $parametro . '%';
        $data = ['b1' => $conlike, 'b2' => $conlike];
        // ejecutar la sentencia
        $stmt->execute($data);
        //obtener  resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //retornar resultados
        return $resultados;
    }

}
