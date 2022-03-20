<?php

require_once 'config/Conexion.php';

class GonzalezDAO {

    private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }

    
    public function listar() {
        // sql de la sentencia
        $sql = "select * from usuario";
        //preparacion de la sentencia
        $stmt = $this->con->prepare($sql);
        //ejecucion de la sentencia
        $stmt->execute();
        //recuperacion de resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // retorna datos para el controlador
        return $resultados;
    }

    public function insertar($id_usuario, $nombre, $apellido, $usuario, $contrasena) {
        //sentencia sql
		$sql = "INSERT INTO usuario (id_usuario, nombre, apellido, usuario, contrasena)
        VALUES(NULL, :nombre, :apellido, :usuario, :contrasena)";
		
        //bind parameters
        $sentencia = $this->con->prepare($sql);
        $fechaActual = new DateTime('NOW');
        $strfecha = $fechaActual->format('Y-m-d H:i:s');
        $data = [
            'nombre' => $nombre,
            'apellido' => $apellido,
            'usuario' => $usuario,
            'contrasena' => $contrasena
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

    public function eliminar($id_eliminar) {
		$sql= "DELETE FROM usuario WHERE id_usuario = :id_eliminar";
		
        //bind parameters
        $sentencia = $this->con->prepare($sql);
        $data = [
            'id_eliminar' => $id_eliminar
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
	
	public function buscar_id($id) {
          // sql de la sentencia
        $sql = "SELECT * FROM usuario WHERE id_usuario=:id";
        $stmt = $this->con->prepare($sql);
        // preparar la sentencia
        $data = ['id' => $id];
        // ejecutar la sentencia
        $stmt->execute($data);
        //obtener  resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //retornar resultados
        return $resultados;
    }
}
