<?php

declare(strict_types=1);

function obtenerPacientes():void{

    $b = [
        [
            'pNombre'=>'Estiven',
             "pApellido"=>'Mejía',
             'edad'=>23,
             'direccion'=>[
                            'pais'=>'Honduras',
                            'ciudad'=>'Tegucigalpa'
                            ]
        ],
        [
            'pNombre'=>'Estiven',
             "pApellido"=>'Mejía',
             'edad'=>23,
             'direccion'=>[
                            'pais'=>'Honduras',
                            'ciudad'=>'Tegucigalpa'
                            ]
        ],
        [
            'pNombre'=>'Estiven',
             "pApellido"=>'Mejía',
             'edad'=>23,
             'direccion'=>[
                            'pais'=>'Honduras',
                            'ciudad'=>'Tegucigalpa'
                            ]
        ]
        ];
    
    echo $b[0]['pNombre']."\n";
    echo $b[0]['direccion']['ciudad'];
    echo "\n-----------------------------------------------------------\n";
    foreach($b as $indice => $a){
        echo 'Número de lista: ' . $indice+1 . "\n";
        echo "Paciente: ". $a['pNombre'] . ' ' . $a['pApellido'] . "\n";
        echo "Edad: " . $a['edad'] . "\n";
        echo 'Ciudad y país de nacimiento: ' . $a['direccion']['ciudad'] . ', ' , $a['direccion']['pais'] . ".\n\n";
    }

}

obtenerPacientes();