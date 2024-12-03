<?php
require('conexion.php');

$db = new Conexion();

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
$conexion = $db->getConexion();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$id_genero = $_POST['id_genero'];
$id_ciudad = $_POST['id_ciudad'];
$id_lenguaje = $_POST['id_lenguaje'];

$sql = "INSERT INTO USUARIOS (nombre,apellido,correo,fecha_nacimiento, id_genero,id_ciudad) VALUES
(:nombre, :apellido, :correo, :fecha_nacimiento, :id_genero, :id_ciudad)";

$sql = "INSERT INTO LENGUAJES (id_lenguaje, nom_lenguaje)values (:id_lenguaje, :nom_lenguaje)";

$stm = $conexion ->prepare($sql);

$stm -> bindParam(":nombre" , $nombre);
$stm -> bindParam(":apellido" , $apellido);
$stm -> bindParam(":correo" , $correo);
$stm -> bindParam(":fecha_nacimiento" , $fecha_nacimiento);
$stm -> bindParam(":id_genero" , $id_genero);
$stm -> bindParam(":id_ciudad" , $id_ciudad);
$stm -> bindParam(":id_lenguaje" , $id_lenguaje);

$stm -> execute();

// $usuario = $stm -> execute();

// $id_usuario  = $conexion -> lastInsertId();

// var_dump($id_usuario);