<?php 

$conexion = "";
$db = "";

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";


require('conexion.php');

$db = new Conexion();
$conexion = $db->getConexion();

$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$correo = $_REQUEST['correo'];
$fecha = $_REQUEST['fecha'];
$generos = $_REQUEST['generos'];
$ciudad = $_REQUEST['ciudad_id'];
$lenguajes = $_REQUEST['id_lenguajes'];


$sql = "INSERT INTO usuarios (nombre,apellido,correo,fecha_nacimiento,id_genero,id_ciudad,id_lenguajes) values
(:nombre,:apellido,:correo,:fecha_nacimiento,:id_generos,:id_ciudad,:id_lenguajes)";

$stm = $conexion->prepare($sql);

$stm->bindParam(":nombre",$nombre);
$stm->bindParam(":apellido",$apellido);
$stm->bindParam(":correo",$correo);
$stm->bindParam(":fecha_nacimiento",$fecha);
$stm->bindParam(":id_generos",$generos);
$stm->bindParam(":id_ciudad",$ciudad);
$stm->bindParam(":id_lenguajes",$lenguajes);
$usuarios = $stm->execute();


$ultimo_id = $conexion->lastInsertId();

foreach ($lenguajes as $key => $value) {
    $sql = "INSERT INTO lenguajes_usuarios (id_aprendiz,id_lenguajes) values
    (:id_aprendiz,:id_lenguajes)";

    $stm = $conexion->prepare($sql);

    $stm->bindParam(":id_aprendiz",$ultimo_id);
    $stm->bindParam(":id_lenguajes",$value);
    $usuarios = $stm->execute();
}
?>
<table>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th>Fecha de Nacimiento</th>
        <th>Generos</th>
        <th>Ciudad</th>
        <th>Lenguajes</th>
    </tr>
    <tr>
        <td><?=$nombre?></td>
        <td><?=$apellido?></td>
        <td><?=$correo?></td>
        <td><?=$fecha?></td>
        <td><?=$generos?></td>
        <td><?=$ciudad?></td>
        <td><?=$lenguajes?></td>
    </tr>
</table>

<?= include('usuarios.php');