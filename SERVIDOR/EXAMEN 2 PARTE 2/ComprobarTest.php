<!-- ANTONIO MIGUEL ALBA GARCIA - 29/10/2024 -->
<?php

use PHPUnit\Framework\TestCase;

require_once 'Comprobar.php';

class ComprobarTest extends TestCase
{
    public function esPar()
    {
        $comprobar = new Comprobar();
        $resultado = $comprobar->esPar(2);
        try {
            $this->assertEquals(true, $resultado, "El numero 2 es par");
        } catch (InvalidArgumentException $iae) {
            echo $iae->getMessage();
        }
    }
}
