<?php
$estudiantes = ['carlos', 'Jose', 'Maria', 'Luis'];

echo "<pre>";
// var_dump($estudiantes);
print_r($estudiantes);
echo "</pre>";

echo $estudiantes[2];

$instructor = [
  'nombre' => 'John',
  'apellido' =>'Becerra',
  'edad' => 38,
  'deudas' => '3.700.000.00'
];

echo "<pre>";
print_r($instructor);
echo "</pre>";

$tutor = [
 'nombre' => 'John Freddy',
 'apellido' => 'Becerra',
 'edad' => 38,
 'direccion' =>[
      'ciudad' => 'Bucaramanga',
      'barrio' => 'San francisco',
      'nomeclatura'=> 'carrera 25 #18-65',
      'zipcode' => 666554
    ],
      'habilidades' => [
      'git', 'html', 'css', 'js', 'php', 'python', 'sql'
   ]
 ];

 echo "<pre>";
 print_r($tutor);
 echo"</pre>";

 echo "<pre>";
 echo $tutor['direccion']['nomeclatura'];
 echo"</pre>";

 echo "<pre>";
 echo ($tutor['habilidades'][4]);
 echo"</pre>";
 

 $tutor['habilidades'][3] = "JavaScript";
 echo "<pre>";
 print_r($tutor);
 echo "</pre>";
 $tutor['direccion']['departamento']='santander';
 //unset($tutor['habilidades'][4]);
 array_splice($tutor['habilidades']);
 echo "<pre>";
 print_r($tutor['direccion']);
 echo "</pre>";