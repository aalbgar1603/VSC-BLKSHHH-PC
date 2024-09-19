<?php
$arr=array("lunes","martes","miercoles","jueves","viernes");

$arr["sab"]="sabado";
$arr["dom"]="domingo";

unset($arr[0]);

print_r($arr);
/* Si aparece el indice, porque PHP  indexa automaticamente */
?>