<?php

class Persona{

    private $nombre, $apellido, $edad;

    public function __construct(string $nombre, string $apellido, int $edad){
        $this->nombre = ucwords(strtolower($nombre));
        $this->apellido = ucwords(strtolower($apellido));
        $this->edad = $edad;
    }

    public function getNombre():string{
        return $this->nombre;
    }

    public function setNombre(string $nombre):void{
        $this->nombre = ucwords(strtolower($nombre));
    }   

    public function getApellido():string{
        return $this->apellido;
    }
    
    public function setApellido(string $apellido):void{
        $this->apellido = ucwords(strtolower($apellido));
    }

    public function getEdad():int{
        return $this->edad;
    }

    public function setEdad(int $edad):void{
        $this->edad = $edad;
    }

}