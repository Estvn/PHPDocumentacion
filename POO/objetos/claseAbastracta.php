<?php

declare(strict_types=1);

/**
 * Las clases abstractas se usan normalmente para definir cuerpos genéricos de clases que se usarán en el proyecto.
 * Al ser cuerpos genéricos que heredarán clases que si se usarán en el proyecto, estas no serán instanciadas.
 * Al no ser necesaria su instancia, tampoco es necesaria su declaración de constructor.
 * 
 * En las clases abstractas se puede usar el encapsulamiento que desee.
 * En las clases abstractas puede definir, o no, lógica en los métodos.
 */

abstract class ClaseAbstracta{

    # Puede simular un funcionamiento parecido a las interfaces, definiendo a los métodos como abstractos.
    # Al igual que las interfaces, este tipo de métodos es obligatorio definirlos en la clase hija.
    abstract protected function metodoGenerico1():void;

    # Los métodos que no son abstractos, queda en decisión del programador si sobre-escribirlo en la clase hija.
    protected function metodoGenerico2():void{
        echo "No sé";
    }
}

class MyClass extends ClaseAbstracta{

    private string $nombre = "Estiven";

    # El encapsulamiento de los métodos puede ser modificado.
    public function metodoGenerico1():void{
        echo "El nombre del ingeniero es: $this->nombre\n" ;
    }

    /*
    public function metodoGenerico2():void{
        echo parent::metodoGenerico2() . " Con valor agregado";
    }
    */
}

$clase = new MyClass;
$clase->metodoGenerico1();
//$clase->metodoGenerico2();