<?php

declare(strict_types=1);

/**
 * - Las interfaces son plantillas que obligan a los programadores a trabajar con una plantilla ya definida en los proyectos.
 * - Normalmente son los analistas de sistemas los que desarrollan las interfaces durante el proceso del análisis de requerimientos del sistema.
 * 
 * - Los métodos de las interfaces tienen que ser públicos.
 * - Los métodos de las interfaces no tienen que llevar cuerpo o lógica.
 */

interface A{

    # Los métodos de las interfaces se definen de forma obligatoria en la clase que implemente esta interfaz.
    public function aFunction():string;
}

interface B{

    public function bFunction():string;
}

interface C extends A, B{ 

    # Esta interfaz contiene los métodos de las otras interfaces.
    public function cFunction():string;
}

interface ITemplate extends C{

    # Esta interfaz contiene los métodos de todas las otras interfaces.
    public function setVariable():string;
    public function getHtml():string;
}

# Solo es necesario implementar la interfaz de la última rama de herencia.
# Con esta interfaz tiene acceso a todos los métodos de todas las interfaces.
class Template implements ITemplate{

    public function setVariable():string{
        return "No sé";
    }

    public function getHtml():string{
        return "No sé";
    }

    public function aFunction(): string{
        return "No sé";
    }

    public function bFunction(): string{
        return "No sé";
    }

    public function cFunction(): string{ 
        return "No sé";
    }

    public function metodoClase():string{
        return "No sé";
    }

}