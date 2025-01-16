<?php

class MyClass{

    public string $public = "Variable pública"; # Se puede acceder desde cualquier parte del proyecto.
    protected string $protected = "Variable privada"; # Se puede acceder por la clase y sus hijas.
    private string $private = "Variable protegida"; # Se puede acceder solo dentro de la clase.


    public function printHello():void{
        echo "$this->public | $this->protected | $this->private";
    }
}

$clase = new MyClass;

$clase->printHello();
$clase->public;
#$clase->protected;
#$clase->private;