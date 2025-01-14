<?php

$a = 5;
$b = 3;

if($a < 10 && $b > 10):
    echo "El número mayor es $b";
elseif ($a > $b):
    echo "El número mayor es $a";
else:
    echo "El número $a no es menor a 10 ni mayor a $b";
endif;

echo 'Adíos';