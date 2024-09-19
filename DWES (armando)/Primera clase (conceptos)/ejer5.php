<?php
$res = 1;
for($a = 1; $a <= 10; $a++)  {
  echo "$res x $a = ";
  $res = $res * $a;
  echo "$res\n";
}
?>