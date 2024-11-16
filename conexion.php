<?php

class Conexion
{
    private $conexion;
    private $host = "localhost";
    private $db   = "adso2894667";
    private $user = "JuanDavid";
    private $contrasena = "#Aprendiz2024";

    public function __construct()
    {
        try{
       $opciones = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];
        $this->conexion = "mysql:host='localhost';dbname='adso2894667';charset='UTF8mb4'";
        $this->conexion = new PDO($this->conexion,'JuanDavid','#Aprendiz2024',$opciones);
        $this->conexion->exec("set character set utf8");
        } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getConexion()
{
    return $this->conexion;
}

function cerrarConexion()
{
    $this->conexion = null;
}

}