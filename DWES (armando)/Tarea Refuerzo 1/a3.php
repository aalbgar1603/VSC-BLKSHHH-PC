<?php

$cadena = "Pans,Carnes,Quesos,Tomates";
$arr = explode(",",$cadena);
$lista = list($pan,$carne,$queso,$tomate) =  $arr;

foreach ($lista as $key => $value) {
  echo "$value\n";
}
foreach ($lista as $key => $value) {
  echo "$value  ";
}

?>