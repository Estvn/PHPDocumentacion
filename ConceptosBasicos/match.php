<?php

$a = 12;

echo match($a){
    1 => "El valor es 1",
    2 => "El valor es 2",
    3 => "El valor es 3",
    default => "El valor no está en las condiciones"
};