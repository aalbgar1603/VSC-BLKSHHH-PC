<?php

  function sumar($num1, $num2) {
    return $num1+$num2;
  }
  function restar($num1, $num2) {
    return $num1+$num2;
  }
  function multiplicar($num1, $num2) {
    return $num1+$num2;
  }
  function elegir($opc = 1, $num1, $num2) {
    echo "Elige Sumar (1), Restar (2), Multiplicar (3)\n";
    switch ($opc) {
      case 1:
        echo sumar($num1,$num2);
        break;
      case 2:
        echo restar($num1,$num2);
        break;
      case 3:
        echo multiplicar($num1,$num2);
        break;
      default:
        echo  "Opcion no valida. Chao";
        break;
    }
  }

  elegir(2,2,5)
?>