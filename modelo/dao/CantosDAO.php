<?php

require_once 'config/Conexion.php';

class CantosDAO {

    private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }

    
    public function listar() {
        // sql de la sentencia
        $sql = "select * from protocolo_covid where id_protocolo_covid = id_protocolo_covid";
        //preparacion de la sentencia
        $stmt = $this->con->prepare($sql);
        //ejecucion de la sentencia
        $stmt->execute();
        //recuperacion de resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // retorna datos para el controlador
        return $resultados;
    }

    public function insertar($id_protocolo_covid, $name, $sur_name, $email, $vacuna, $mask, $range_washs,$terms) {
        //sentencia sql
        $sql = "INSERT INTO protocolo_covid (id_protocolo_covid, name, sur_name, email, vacuna,mask, range_washs,terms) VALUES 
            (:id_protocolo_covid, :name, :sur_name, :email, :vacuna, :mask, :range_washs, :terms)";
       
        //bind parameters
        $sentencia = $this->con->prepare($sql);
        $fechaActual = new DateTime('NOW');
        $strfecha = $fechaActual->format('Y-m-d H:i:s');
        $data = [
            'id_protocolo_covid' => $id_protocolo_covid,
            'name' => $name,
            'sur_name' => $sur_name,
            'email' => $email,
            'vacuna' => $vacuna,
            'mask' => $mask,
            'range_washs' => $range_washs,
            'terms' => $terms
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


    public function buscarxId($id_protocolo_covid) { // buscar un producto por su id
        $sql = "select * from protocolo_covid where id_protocolo_covid = :id_protocolo_covid";
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
        $data = ['id_protocolo_covid' => $id_protocolo_covid];
        // ejecutar la sentencia
        $stmt->execute($data);
        // recuperar los datos (en caso de select)
        $proto = $stmt->fetch(PDO::FETCH_ASSOC);// fetch retorna el primer registro
        // retornar resultados
        return $proto;
    }

    public function buscar($parametro) {
          // sql de la sentencia
        $sql = "SELECT * FROM protocolo_covid  where id_protocolo_covid = id_protocolo_covid  and 
		(name like :b1 or sur_name like :b2)";
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

    public function actualizar($id_protocolo_covid, $name, $sur_name, $email, $vacuna, $mask, $range_washs,$terms) {
        //prepare
        $sql = "UPDATE `protocolo_covid` SET `id_protocolo_covid`=:id_protocolo_covid,`name`=:name,`email`=:email,
        `vacuna`=:vacuna,`mask`=:mask,`range_washs`=:range_washs,`terms`=:terms WHERE id_protocolo_covid=id_protocolo_covid";
       
        $data = [
            'id_protocolo_covid' => $id_protocolo_covid,
            'name' => $name,
            'sur_name' => $sur_name,
            'email' => $email,
            'vacuna' => $vacuna,
            'mask' => $mask,
            'range_washs' => $range_washs,
            'terms' => $terms
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

    public function eliminar($id_protocolo_covid) {
        //prepare
        $sql = "DELETE FROM `protocolo_covid` WHERE id_protocolo_covid=:id_protocolo_covid";
        //now());
        //bind parameters
        $sentencia = $this->con->prepare($sql);
       
        $data = [
            'id_protocolo_covid' => $id_protocolo_covid
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


}
