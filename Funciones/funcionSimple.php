<?php

function factorial($a){

    if($a<=1){
        return $a;
    }
    return $a * factorial($a-1);
}
#echo factorial(9) . "\n";

function factorial2($a){
    $valor = 1;

    for($i=$a; $i>0; $i--){
        $valor *= $i;
    }

    echo $valor;
}
#echo factorial2(9);