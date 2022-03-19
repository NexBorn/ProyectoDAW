<?php

require_once 'config/Conexion.php';

class ProductosDAO {

    private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }

    //Terminado
    public function listar() {
        // sql de la sentencia
        $sql = "select * from mas_informacion";
        //preparacion de la sentencia
        $stmt = $this->con->prepare($sql);
        //ejecucion de la sentencia
        $stmt->execute();
        //recuperacion de resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // retorna datos para el controlador
        return $resultados;
    }
    //Terminado
    public function insertar($nombre, $apellidos, $telefono, $correo, $asunto, $mensaje) {
        //sentencia sql
        //$sql = "INSERT INTO productos (prod_id, prod_codigo, prod_nombre, prod_descripcion, prod_estado, prod_precio, 
            // prod_idCategoria, prod_usuarioActualizacion, prod_fechaActualizacion) VALUES 
            // (NULL, :cod, :nom, :desc, :estado, :precio, :idCat, :usu, :fecha)";

        $sql = "INSERT INTO mas_informacion (`nombre`, `apellidos`, `telefono`, `correo`, `asunto`, `mensaje`) 
                VALUES ('$nombre', '$apellidos', '$telefono', '$correo', '$asunto', '$mensaje');";
       
        //bind parameters
        $sentencia = $this->con->prepare($sql);
        $fechaActual = new DateTime('NOW');
        $strfecha = $fechaActual->format('Y-m-d H:i:s');
        $data = [
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'telefono' => $telefono,
            'correo' => $correo,
            'asunto' => $asunto,
            'mensaje' => $mensaje
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

    public function actualizar($id, $nombre, $apellidos, $telefono, $correo, $asunto, $mensaje) {
        //prepare
        $sql = "UPDATE `mas_informacion` SET `nombre`='$nombre',
        `apellidos`='$apellidos',`telefono`='$telefono',`correo`='$correo',
        `asunto`='$asunto',`mensaje`='$mensaje' WHERE id=$id";

        $sentencia = $this->con->prepare($sql);
        $data = [
            'id' => $id,
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'telefono' => $telefono,
            'correo' => $correo,
            'asunto' => $asunto,
            'mensaje' => $mensaje
        ];

        $sentencia-> execute($data);
        //retornar resultados, 
        if ($sentencia->rowCount() <= 0) { // verificar si se inserto 
            //rowCount permite obtner el numero de filas afectadas
            return false;
        }
        return true;
    }

    public function eliminar($id) {
        $sql = "DELETE FROM 'mas_informacion' WHERE id='$id'";

        $sentencia = $this->con->prepare($sql);

        $data = [
            'id' => $id
        ];

        //execute
        $sentencia->execute($data);
        //retornar resultados, 
        if ($sentencia->rowCount() <= 0) { // verificar si se inserto 
            //rowCount permite obtner el numero de filas afectadas
            return false;
        }
        return true;
    }

    public function buscar($parametro) {
          // sql de la sentencia
        $sql = "SELECT * FROM 'mas_informacion'  where  
		(nombre like :b1 or apellidos like :b2 or asunto like:b1 or mensaje like:b2)";
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
