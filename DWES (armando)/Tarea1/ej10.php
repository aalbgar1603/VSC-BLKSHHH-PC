<?php
/**
 * Antonio Miguel Alba Garcia
 */
  $string="Desarrollo de aplicaciones web";

  function comprobar($string) {
    
    if (preg_match("/\bweb\b/", $string)) {
      $resu="Contiene web";
    } else {
      $resu= throw new Exception("La frase {$string} no contiene la palabra web");
      ;
    }
    return $resu;
  }

  try {
    echo comprobar($string);
  } catch (Exception $e) {
    echo "Error: ", $e->getMessage();
  }
?>