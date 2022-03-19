<?php

class Conexion {

    public static function getConexion() {
        $database_username = 'root';
        $database_password = 'root';
        $dbname = "grupo2";
        $dsn = 'mysql:host=localhost;dbname=' . $dbname;
        $conexion = null;
        try {
            $conexion = new PDO($dsn, $database_username, $database_password);
             $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo $e;
            die("error " . $e->getMessage());
        }      
        return $conexion;
    }

}
