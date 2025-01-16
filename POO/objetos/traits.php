<?php
/**
 * En PHP no existe la herencia múltiple.
 * Se hace uso de los Traits para simular le herencia múltiple.
 * 
 * Los Traits no se pueden instanciar.
 * Los Traits tienen precedencia a las clases abstractas o normales.
 * 
 * Si dos Traits heredados tienen el mismo método y no se soluciona la interferencia, se generará un error.
 * Si el método de un Trait es protegido o privado, y no se modifica su acceso, no se podrá utilizar.
 */

declare(strict_types=1);

abstract class Persona{

    abstract protected function nombrePersona():void;
    public function saludoGenerico():void{
        echo "Hola desde la clase abstracta\n";
    }
}

trait Americano{

    public function saludoAmericado():void{
        echo "Hola\n";
    }

    public function saludoGenerico():void{
        echo "Hola desde el Trait\n";
    }
}

trait Europeo{

    public abstract function metodoAbstractoTrait():void;

    public function saludoEuropeo():void{
        echo "Hola\n";
    }

    protected function holaquetal():void{
        echo "Ciao, come stai?\n";
    }
}

Trait A{

    public function metodo():void{
        echo "Este es el método de A\n";
    }
}

Trait B{

    public function metodo():void{
        echo "Este es el método de B\n";
    }
}

class Hondureno extends Persona{

    use Americano; # Se puede usar más de un Trait.

    use A, B{
        A::metodo insteadOf B;
    }

    # Cuando las clases padre no son Traits, se puede modificar el tipo de encapsulamiento de los métodos de esta forma.
    public function nombrePersona():void{
        echo "Estiven\n";
    }
}

$hon = new Hondureno;
$hon->saludoAmericado();
$hon->nombrePersona();
$hon->saludoGenerico(); # Debido a la precedencia, se usará el método del Trait
$hon->metodo();

class Italiano{

    #use Europeo;
    use Europeo{ Europeo::holaquetal as public;}

    public function metodoAbstractoTrait():void{
        echo "Método abstracto de Trait";
    }
}

$it = new Italiano;
$it->holaquetal();