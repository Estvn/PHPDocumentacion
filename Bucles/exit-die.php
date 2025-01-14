<?php

/* 
exit() y die() son métodos usados para detener un programa.
exit() se usa cuando se cumple una condición.
die() se usa cuando ha ocurrido un problema.
*/

for($i=0; $i<20; $i++){
    if($i == 12 || $i == 15){
        exit();
        #die();
    }
    echo "$i "; 
}

echo "Esta línea nunca se ejecutará";