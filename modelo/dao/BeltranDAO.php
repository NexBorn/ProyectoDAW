<?php

require_once 'config/Conexion.php';
require_once 'modelo/dao/BeltranDAO.php';

class BeltranDAO {

    private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }

    
    public function listar() {
        // sql de la sentencia
        $sql = "select * from reservacion where id_reservacion = id_reservacion;";
        //preparacion de la sentencia
        $stmt = $this->con->prepare($sql);
        //ejecucion de la sentencia
        $stmt->execute();
        //recuperacion de resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // retorna datos para el controlador
        return $resultados;
    }

 
    public function insertar($cedula,$name,$email,$guestelephone,$adults,$children,$fechadesde,$diasreservado) {
        $sql = "INSERT INTO reservacion (cedula_pasaporte, apellidos_nombres, email, telefono, adultos, ninos, reservadodesde,  diasreservado) 
        VALUES (:cedula_pasaporte, :apellidos_nombres, :email, :telefono, :adultos, :ninos, :reservadodesde, :diasreservado)";
            
        //bind parameters
        $sentencia = $this->con->prepare($sql);
        $fechaActual = new DateTime('NOW');
        $strfecha = $fechaActual->format('Y-m-d H:i:s');
        $data = [
            'cedula_pasaporte' => $cedula,
            'apellidos_nombres' => $name,
            'email' => $email,
            'telefono' => $guestelephone,
            'adultos' => $adults,
            'ninos' => $children,
            'reservadodesde' => $fechadesde,
            'diasreservado' => $diasreservado
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
	
	public function buscarxId($id) { // buscar un producto por su id
        $sql = "select * from reservacion where id_reservacion =:id";
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
        $data = ['id' => $id];
        // ejecutar la sentencia
        $stmt->execute($data);
        // recuperar los datos (en caso de select)
        $proto = $stmt->fetch(PDO::FETCH_ASSOC);// fetch retorna el primer registro
        // retornar resultados
        return $proto;
    }
	

    public function buscar($parametro) {
          // sql de la sentencia
        $sql = "select * from reservacion  where id_reservacion = id_reservacion  and 
		(cedula like :b1 or name like :b2)";
        $stmt = $this->con->prepare($sql);
        // preparar la sentencia
        $conlike = '%' . $parametro . '%';
        $data = ['b1' => $conlike,'b2' => $conlike];
        // ejecutar la sentencia
        $stmt->execute($data);
        //obtener  resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //retornar resultados
        return $resultados;
    }

    public function actualizar($cedula,$name,$email,$guestelephone,$adults,$children,$fechadesde,$diasreservado, $id) {
        //prepare
        //$sql = "UPDATE `reservacion` SET cedula_pasaporte=:cedula_pasaporte, apellidos_nombres=:apellidos_nombres, email=:email, telefono=:telefono, adultos:=adultos, ninos=:ninos, reservadodesde=:reservadodesde,  diasreservado=:diasreservado
        //WHERE id_reservacion=:id";

        $sql = "update reservacion set cedula_pasaporte ='$cedula', apellidos_nombres ='$name', email = '$email', telefono = '$guestelephone',
        adultos = '$adults', ninos = '$children', reservadodesde = '$fechadesde', diasreservado = '$diasreservado' where id_reservacion=$id";
        $sentencia = $this->con->prepare($sql);
        $data = [
            'id_reservacion'=> $id,
            'cedula_pasaporte'=> $cedula,
            'apellidos_nombres'=> $name,
            'email'=> $email,
            'telefono'=> $guestelephone,
            'adultos'=> $adults,
            'ninos'=> $children,
            'reservadodesde' => $fechadesde,
            'diasreservado'=> $diasreservado
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

    public function eliminar($id) {
        //prepare
        $sql = "DELETE FROM `reservacion` WHERE id_reservacion=:id";
        //now());
        //bind parameters
        $sentencia = $this->con->prepare($sql);
       
        $data = [
            'id' => $id
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
