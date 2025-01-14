<?php

for($i=0; $i<20; $i++){
    if($i == 12 || $i == 15){
        #break; # Termina el bucle
        continue; # Omite la iteración
    }
    echo "$i "; 
}