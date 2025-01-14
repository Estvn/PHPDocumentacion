<?php
/*
En PHP existen dos tipos de variables:
- Globales. Se pueden utilizar en todo el código
- Locales. Solo tienen alcance dentro o fuera de funciones.
*/

$variable = 3;

function funcion(){
     //echo $variable; # La funciones no reconocen las variables fuera de ellas.
    $variable = 10; # Esta es una variable nueva
    echo "$variable ";
}

function var_global(){
    global $variable; # Obtieniendo acceso a una variable fuera de la función.
    $variable = 333;
    echo "$variable ";
}

funcion();
var_global();
echo $variable;
