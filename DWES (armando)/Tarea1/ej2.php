<?php

  $nombre="Antonio*Alba*Garcia";

  $separados = explode("*", $nombre);

  $lista= list($nombre, $ape1, $ape2) = $separados;

  echo "{$nombre} {$ape1} {$ape2}\n";
  echo "{$nombre}\n{$ape1}\n{$ape2}";
  echo "\n";

  //La diferencia es que podemos dar claves opcionales a cada `posicion de una array y llamar los valores por esa clave

?>