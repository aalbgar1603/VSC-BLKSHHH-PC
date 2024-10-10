<?php

  function azar() {
    $num = random_int(0, 100);
    if ($num % 2 == 1) {
      throw new Exception("Error el numero es impar: ".$num);
    } else {
      return $num;
    }
  }
  try {
    echo azar();
  } catch (\Exception $e) {
    echo $e->getMessage();
  }
?>