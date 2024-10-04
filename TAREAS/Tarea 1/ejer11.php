<?php

function calcular($operacion, $valor1, $valor2) {
  return $operacion($valor1, $valor2);
}

function suma($a, $b) {
  return $a + $b;
}

function resta($a, $b) {
  return $a - $b;
}

echo calcular('suma', 5, 10)."\n";
echo calcular('resta', 10, 5);
?>