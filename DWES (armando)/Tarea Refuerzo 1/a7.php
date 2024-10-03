<?php

  function app($num1,$num2,$numOpc) {
    if ($numOpc == 1) {
      echo "La opcion elegida es sumar\nLos numeros son $num1 y $num2\n";
      echo  sumar($num1,$num2);
    } elseif ($numOpc == 2) {
      echo "La opcion elegida es restar\nLos numeros son $num1 y $num2\n";
      echo  restar($num1,$num2);
    } elseif ($numOpc == 3) {
      try {
        echo "La opcion elegida es dividir\nLos numeros son $num1 y $num2\n";
        echo division($num1,$num2);
      } catch (\Exception $e) {
        echo "ERROR: ".$e->getMessage();
      }
    }
  }

  function sumar($num1, $num2){
    return $num1+$num2;
  }
  function restar($num1, $num2){
    return $num1-$num2;
  }
  function division($num1, $num2){
    if ($num2 == 0){
      throw new Exception("No se puede dividir entre 0");
    } else {
      return $num1/$num2;
    }
  }

  $num1 = random_int(0,9);
  $num2 = random_int(0,9);
  $numOpc = random_int(1,3);

  app($num1, $num2, $numOpc);


?>