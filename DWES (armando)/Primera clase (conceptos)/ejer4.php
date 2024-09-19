<?php
for($a = 0; $a < 5; $a++)  {
  if ($a > 2) {
    continue;
  }
  echo $a+1;
}

?>