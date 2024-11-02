<?php
//$exp = "/PRUEBA/";
//$exp = "/[0-9]/";
//$exp = "/^texto/i";
//$exp = "/pr[eu]ba/i";
//$exp = "/grupo-[0-9]-adso/";
// $exp = "/le{2,4}r/";
$texto = "grupo ADS 2894667";
$exp = "/[0-9]{2,}/";
// $resultado = preg_match_all($exp, $texto, $coincidencias, PREG_OFFSET_CAPTURE);
$resultado = preg_match_all($exp, $texto, $coincidencias, PREG_OFFSET_CAPTURE);

if ($resultado) {
  echo "SI tiene resultado";
} else{
  echo "NO tiene resultado";
}

// echo "<pre>";
// print_r($coincidencias);
// echo "</pre>";
