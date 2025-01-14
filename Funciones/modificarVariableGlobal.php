<?php
/*
Hay dos formas de modificar una variable global dentro de una función:
    - Llamandola de forma global dentro de la función.
    - Enviando la variable (no el valor de la variable) a los parámetros de la función precediendo del signo "&".
*/ 

$a = 10;

 // Es método solo permite modificar la variable global definida en el código
function cambiarVariableGlobal(){
    global $a;
    $a = 100;
}

// Este método permite modificar la variable global enviada en los argumentos.
function cambiarVariableReferencia(&$a){
    $a = 1789;
}

echo "El valor inicial de la variable es: $a\n";
cambiarVariableGlobal();
echo "Se ha modiifcado llamandose de forma global: $a\n";
cambiarVariableReferencia($a);
echo "Has been updated putting it in the funciton parameters: $a";
