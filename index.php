<?php

require('conexion.php');

$db = "";
$conexion = "";

$db = new Conexion();
$conexion = $db->getConexion();

$sql = "SELECT * FROM ciudades";

$bandera = $conexion->prepare($sql);
$bandera->execute();
$ciudades = $bandera->fetchAll();


$sql = "SELECT * FROM generos";

$bandera = $conexion->prepare($sql);
$bandera->execute();
$generos = $bandera->fetchAll();

$sql = "SELECT * FROM lenguajes";

$bandera = $conexion->prepare($sql);
$bandera->execute();
$lenguajes = $bandera->fetchAll();

?>

<head>
    <style> 
        *{
            box-sizing: border-box;
        }

        .genero__item{
            display: flex;
            flex-direction: column;
        }

        .genero__contenedor{
            width: 100px;
            display: flex;
            margin-top: 10px;
            justify-content: space-between;
        }

        .form{
            display: flex;
        }

        .contenedor__label{
            margin-top: 10px;
        }

        .formulario-contenedor{
            background-color: #fff;
        }
    </style>
</head>
<div class="formulario-contenedor">
    <h1> formulario</h1>
    <form action="envio.php">
        <div class="contenedor__label">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
        </div>

        <div class="contenedor__label">
            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido">
        </div>

        <div class="contenedor__label">
            <label for="correo">Correo</label>
            <input type="text" id="correo" name="correo">
        </div>

        <div class="contenedor__label">
            <label for="fecha">Fecha de nacimiento</label>
            <input type="date" id="fecha" name="fecha">
        </div>

        <div class="contenedor__label">
            <label for="ciudad_id">Ciudad: </label>
            <select name="ciudad_id" id="ciudad_id" name="ciudad">
                <?php 
                    foreach ($ciudades as $key => $value) {
                        echo $value;
                ?>      <option value="<?= $value['id'] ?>" value="<?= $value['id'] ?>">
                            <?= $value['nombre'] ?>
                        </option>
                <?php
                    }
                ?>
            </select>
        </div>
        <div class="generos-contenedor">
            <p>Seleccione su genero:</p>
            <div class="generos">
            <?php 
                foreach ($generos as $key => $value) {
            ?>
                    <div class="generos__contenedor">
                        <label for="<?= $value['id'] ?>" class="generos__label">
                            <?= $value['nombre'] ?>
                        </label>
                        <input type="radio" id="<?= $value['id'] ?>" value="<?= $value['id'] ?>" name="generos" class="generos__input">
                    </div>
                    
            <?php
                }
            ?>
            </div>
        </div>

        <div class="lenguajes-contenedor">
            <p>Seleccione sus lenguajes:</p>
            <div class="lenguajes">
            <?php 
                foreach ($lenguajes as $key => $value) {
            ?>
                    <div class="">
                        <label for="<?= $value['id'] ?>" class="generos__label">
                            <?= $value['nombre'] ?>
                        </label>
                        <input type="checkbox" id="<?= $value['id'] ?>" value="<?= $value['id'] ?>" name="lenguajes[]">
                    </div>
                    
            <?php
                }
            ?>
            </div>
        </div>

        <button type="submit">Enviar Datos</button>
    </form>
</div>