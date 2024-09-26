<?php
/**
 * Antonio Miguel Alba Garcia
 */
$arr=array("lunes","martes","miercoles","jueves","viernes");

$arr["sab"]="sabado";
$arr["dom"]="domingo";

unset($arr[0]);

print_r($arr);
?>