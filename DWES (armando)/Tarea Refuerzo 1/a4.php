<?php

$cadena = "Pans,Carnes,Quesos,Tomates";
$arr = explode(",",$cadena);

foreach ($arr as $key => $value) {
  echo "$value\n";
}
foreach ($arr as $key => $value) {
  echo "$value  ";
}

?>