<?php
//Antonio Miguel Alba Garcia

function iniciar() {
    $salida = rand(0,4);
    
    if ($salida == 4) {
        throw new Exception("No existe valor en la posicion 4 del array");
    } else {
        return $salida;
    }
    
}

function controladora($tipo) {
    $num1 = rand(0,5);
    $num2 = rand(0,5);
    
    if ($tipo == "Suma") {
        return $num1+$num2;
    } else if ($tipo == "Resta") {
        return $num1-$num2;
    } else if ($tipo == "Multip") {
        return $num1*$num2;
    } else if ($tipo == "Division") {
        if ($num2 == 0) {
            throw new Exception("El divisor es 0");
        } else {
            return $num1/$num2;
        }
    } 
    
}

$cadena = "Suma*Resta*Multip*Div";
$operacion = explode("*", $cadena);

foreach ($operacion as $key => $value) {
    echo $key." ".$value."\n";
}

$operacion[3] = "Division";

echo $operacion[3]."\n";

$posicion = iniciar();
try {
    echo controladora($operacion[$posicion]);
} catch (Exception $e) {
    echo "Error: ".e->getMessage();
}
?>