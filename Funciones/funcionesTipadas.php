<?php

function sumar(int|float $a, int $b):int|float{
    return $a + $b;
}

echo sumar(10,"5.9"); # El 2do parámetro pasará de string a float, luego de float a int
