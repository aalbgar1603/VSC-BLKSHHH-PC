<!-- ANTONIO MIGUEL ALBA GARCIA - 29/10/2024 -->
<?php

class Comprobar
{
    public function esPar($a)
    {
        if ($a % 2 == 0) {
            return true;
        } else {
            throw new InvalidArgumentException("El numero es impar", 1);
        }
    }
}
