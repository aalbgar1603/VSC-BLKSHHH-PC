<?php

/**
 * Calcula  la potencia ($2) de un numero ($1)
 * Si no se pasa el exponente potencia a 2
 */

function potencia($num, $pot = 2) {
  
  if (0 == $pot) {
    return pow($num, 2);
  } else {
    return pow($num, $pot);
  }
}

echo potencia(2);
?>