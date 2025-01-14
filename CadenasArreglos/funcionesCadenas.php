<?php

$cadena = 'aeioú';
echo "$cadena[1]\n";
echo "La cantidad de bits de $cadena es: ".strlen($cadena)."\n"; # Devuelve la cantidad de bits.
echo "La cantidad de carácteres de $cadena es: ".mb_strlen($cadena)."\n"; # Devuelve la cantidad de carácteres.

echo "La letra ú se encuentra en la posición: ".strpos($cadena, 'ú')."\n\n"; # Devuelve el índice donde se encuentra el carácter (si se encuentra).

$frase = "Hola que tal!";
echo "El signo ! se encuentra en la posición: ".strrpos($frase, '!')."\n";
echo "La palabra 'Hola' se encuentra en la frase? ". str_contains($frase, "Hola") ? "Sí, si se encuentra!\n" : "No, no se encuentra.\n";

echo "La frase empieza con la palabra 'Hola'? " . (str_starts_with($frase, "Hola") ? "Sí\n" : "No\n");
echo "La frase finaliza con la palabra 'tal!'" . (str_ends_with($frase, "tal!") ? "Sí\n\n" : "No\n\n");

$cadena1 = "Prueba";
$cadena2 = "prueba";

if(strcmp($cadena1, $cadena2) == 0): #Si son iguales, devuelve 0
    echo "Son iguales\n";
else:
    echo "Las cadenas son diferentes\n";
endif;

echo substr($frase, 5)."\n";
echo substr($frase, -4)."\n";
echo substr($frase, -4, 3)."\n";

echo str_replace(substr($frase, -4, 4), "hace?", $frase)."\n\n";

echo strtolower($frase)."\n";
echo strtoupper($frase)."\n\n";

echo ucfirst($frase)."\n";
echo ucwords($frase)."\n\n";