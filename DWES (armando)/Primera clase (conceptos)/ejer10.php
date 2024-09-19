<?php

function potencia($num, $pot = 2) {
  if (0 == $pot) {
    return pow($num, 2);
  } else {
    return pow($num, $pot);
  }
}

echo potencia(2);

?>