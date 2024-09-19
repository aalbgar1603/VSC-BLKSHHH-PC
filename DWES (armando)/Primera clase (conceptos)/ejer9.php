<?php
$arr=array("lunes","martes","miercoles","jueves","viernes");

$arr["sab"]="sabado";
$arr["dom"]="domingo";

unset($arr[0]);

$arr[0]="lunes";
print_r($arr);
echo "\n------------------\n";
sort($arr);

print_r($arr);
?>