<?php
//Antonio Miguel Alba Garcia

function factorial($num) {
    if ($num > 0) {
        $resul = $num;
        for ($i = $num-1; $i>0; $i--) {
            $resul*=$i;
        }
        return $resul;
    } else {
        return false;
    }
}
echo factorial(5);
?>