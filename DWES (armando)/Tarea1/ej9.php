<?php
/**
 * Antonio Miguel Alba Garcia
 */
function menorQueCinco($numero) {
    $cinco=5;  
    if ($numero>5) {
      echo "El numero {$numero} es menor que {$cinco}";
    } else if ($numero==5) {
      echo "El numero {$numero} es igual que {$cinco}";
    } else {
      throw new Exception("El numero {$numero} es menor que $cinco"); 
    }
  }

  try {
    menorQueCinco(4);
  } catch (Exception $e) {
    echo "Excepcion captura: " , $e->getMessage();
  }
?>