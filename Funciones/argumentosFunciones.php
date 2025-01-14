<?php

function argumentosFijos($nombre="Estiven", $edad=23):void{
    echo "$nombre con edad de $edad\n";
}
argumentosFijos();
argumentosFijos("Josue", 24);

function argumentosVariables(...$palabras):void{
    $frase = "";
    foreach($palabras as $i => $palabra){
        $frase .= "$palabra ";
    }
    echo $frase;
}
argumentosVariables('Estiven', 'Josue', 'Mejia', 'Rodríguez');