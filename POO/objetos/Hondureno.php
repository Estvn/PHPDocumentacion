<?php

//require_once "./persona.php";

class Hondureno extends Persona{

    private string $pais, $ciudad;

    public function __construct(string $nombre, string $pApellido, $sApellido ,int $edad, string $pais, string $ciudad){
        parent::__construct($nombre, $pApellido, $sApellido ,$edad);

        $this->pais = ucfirst(strtolower($pais));
        $this->ciudad = ucfirst(strtolower($ciudad));
    }

    public function getPais():string{
        return $this->pais;
    }

    public function setPais(string $pais):void{
        $this->pais = ucfirst(strtolower($pais));
    }

    public function getCiudad():string{
        return $this->ciudad;
    }

    public function setCiudad(string $ciudad):void{
        $this->ciudad = ucfirst(strtolower($ciudad));
    }

    // Sobreescribiendo método
    public function setNombre($nombre):void{
        parent::setNombre($nombre); // Esto es como si hubiera copiado las líneas del método del padre.
        echo "El nombre se agregó correctamente.";
    }

    // Sobreescribiendo el método padre
    public function setApellidos(string $pApellido, string $sApellido):void{
        $this->pApellido = ucwords(strtolower($sApellido));
        $this->sApellido = ucwords(strtolower($pApellido));
    }

}