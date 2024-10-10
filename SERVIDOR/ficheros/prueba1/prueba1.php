<?php

$fich = fopen("fichero.txt", "r");

if ($fich == false) {
  echo "No se encuentra fichero.txt<br>";
} else {
  echo "fuchero.txt se abrió con exito\n";
  /** Leyendo caracteres
   *while (!feof($fich)) {
   * $caracter = fgetc($fich);
   *echo $caracter;
   *}
   */
  /**
   * Leyendo una sola linea
   * $linea = fscanf($fich, "%s");
   * echo $linea;
   */
  // Leyendo lineas
  while (fscanf($fich, "%s", $linea)) {
    echo $linea . "\n";
  }
  fclose($fich);
}
