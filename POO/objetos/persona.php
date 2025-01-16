<?php

class Persona{

    protected string $nombre, $pApellido, $sApellido;
    protected int $edad;

    public function __construct(string $nombre, string $pApellido, string $sApellido ,int $edad){
        $this->nombre = ucwords(strtolower($nombre));
        $this->pApellido = ucwords(strtolower($pApellido));
        $this->sApellido = ucwords(strtolower($sApellido));
        $this->edad = $edad;
    }

    public function getNombre():string{
        return $this->nombre;
    }

    public function setNombre(string $nombre):void{
        $this->nombre = ucwords(strtolower($nombre));
    }   

    public function getpApellidos():array{
        return [$this->pApellido, $this->sApellido];
    }

    public function setApellidos(string $pApellido, string $sApellido):void{
        $this->pApellido = ucwords(strtolower($pApellido));
        $this->sApellido = ucwords(strtolower($sApellido));
    }

    public function getEdad():int{
        return $this->edad;
    }

    public function setEdad(int $edad):void{
        $this->edad = $edad;
    }

}