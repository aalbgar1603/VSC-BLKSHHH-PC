<?php

  $meses = ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];

  print_r($meses);

  sort($meses);
  print_r($meses);

  $meses[1] = strtoupper($meses[1]);
  print_r($meses);

?>