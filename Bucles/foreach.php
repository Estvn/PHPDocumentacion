<?php

$nombres = ["Estiven", "Josue", "Mejia"];

foreach($nombres as $nombre){
    echo "$nombre ";
}

echo "\n";

foreach($nombres as $indice => $nombre){
    echo "$indice. $nombre ";
}
