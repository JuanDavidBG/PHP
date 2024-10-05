<?php

$texto = "Fundamentos de programación en PHP";

$asignacion = $texto;

$referencia = &$texto;

echo $asignacion;
echo "<br>";
echo $referencia;
$texto = "Asignación por referencia";
echo "<br>";
echo $referencia;
echo "<br>";
echo $asignacion;