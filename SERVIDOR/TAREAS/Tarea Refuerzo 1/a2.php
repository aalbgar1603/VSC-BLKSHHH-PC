<?php
  $meses = ['marzo'=>'primavera','abril'=>'primavera','mayo'=>'primavera',
            'junio'=>'verano','julio'=>'verano','agosto'=>'verano',
            'septiembre'=>'otoño','octubre'=>'otoño','noviembre'=>'otoño',
            'diciembre'=>'invierno','enero'=>'invierno','febrero'=>'invierno'];
  print_r($meses);
  
  foreach ($meses as $key => $value) {
    if ($value == 'primavera') {
      echo "$key $value\n";
    }
  }
  echo count($meses);
  foreach ($meses as $key => $value) {
      echo "\n$value\n";
  }
?>