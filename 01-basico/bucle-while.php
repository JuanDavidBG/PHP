 <?php #
#$tabla = 9;
#$a = 2;
#while ($a <= 10) {
#    $a++;
 #  if ($tabla % $a != 0){
    #code...
 #  }else{
 #   break;
 #  }
 #   if ($a == 8) {
 #       continue;
  #  }
  #  echo "$tabla x $a = ". $tabla * $a ."<br>";
#}   

function esPrimo ($numero) {
    $a = 2;
    $primo = true;
     ($a < $numero/2 && $primo) {
        if ($numero % $a == 0) {
            $primo = false;
            break;
        }
        # code...
        $a++;
    }
    return false;
}

$primo = esPrimo(9) ? "Sí": "No";

echo $primo;