<?php

$a = [10,13,15,20];

echo $a[2]."\n";
print_r($a)."\n";

$b = [
    'pNombre'=>'Estiven',
     "pApellido"=>'Mejía',
     'edad'=>23
    ];

print_r($b)."\n";
echo $b['pNombre'] . ' ' .  $b['pApellido'];