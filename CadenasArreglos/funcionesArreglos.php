<?php

$arreglo = [1,2,3,4];

# Permite guardar cada índice en una variable.
list($a,$b,$c) = $arreglo;
print "$a, $b, $c";

# Llena un arreglo en un rango definido de valores.
$arreglo = range(11,20);
print_r($arreglo);

# Devuelve la cantidad de valores en el arreglo.
echo count($arreglo) . "\n";

$nombres = ["Estiven", "Josue", "Mejia"];

if(in_array("Estiven", $nombres)):
    echo "El valor si existe!\n";
else:
    echo "El valor no existe.\n";
endif;

echo (in_array("Estiven", $nombres)) ? "El valor si existe!\n" : "El valor no existe.\n";