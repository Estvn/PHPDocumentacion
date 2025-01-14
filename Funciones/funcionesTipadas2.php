<?php

# Al no definirse estos valores, los argumentos de las variables intentarán modificarse al valor correspondiente al parámetro.
declare(strict_types=1); 

function sumar(int|float $a, int $b):int|float{
    return $a + $b;
}

echo sumar(10,5);
//echo sumar(10,5.9); # Dará error
//echo sumar(10,"5.9"); # Dará error 
?>
