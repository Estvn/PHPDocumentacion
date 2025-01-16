<?php
/**
 * Los métodos y atributos estáticos se pueden usar sin la necesidad de instanciar el objeto.
 * Para usar estos elementos dentro de su misma clase se usa la palabra reservada self::{metodo o atributo}
 */

class Humano{

    public static string $nombre = "Estiven Mejia\n";
    public static final function saludar():void{
        echo "Hola mundo!\n";
    }

    public static final function nombre():void{
        # Obteniendo un atributo estático de la misma clase.
        echo "El nombre de las persona es: ".  self::$nombre;
    }
}

Humano::saludar();
echo Humano::$nombre;
Humano::nombre();

class Hondureno extends Humano{

    public static function saludo():void{
        # Obteniendo un atributo estático de la clase padre.
        echo "Hola ". parent::$nombre;
    }
}

Hondureno::saludo();