<?php

$nombre = 'Estiven';
$texto = "El nombre de desarrollador es $nombre";
$texto2 = 'El nombre del desarrollador es ' . $nombre;
$texto3 = "Este es un texto con 'comillas' dentro";
$texto4 = "Este es otro texto con \" comillas \" dentro";

echo $texto;
echo $texto2;
echo $texto3;
echo $texto4;

$a = 10;
$b = 25;

var_dump($a == $b);
var_dump($a <> $b);
var_dump($a ^= $b);
var_dump($a != $b);