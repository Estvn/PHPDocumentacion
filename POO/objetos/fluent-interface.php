<?php

class Humano{

    public string $nombre, $apellido_materno, $apellido_paterno, $dni;

    public final function setNombre(string $nombre):object{
        $this->nombre = $nombre;
        return $this; 
    }

    public final function setApellidos(string $apellido_paterno, string $apellido_materno = ''):object{
        $this->apellido_paterno = $apellido_paterno;
        $this->apellido_materno = $apellido_materno;
        return $this;
    }

    public final function setDni(string $dni):object{
        $this->dni = $dni;
        return $this;
    }

    public final function imprimirDatos():void{
        echo  "Nombre: " . $this->nombre . "\n" .
                "Apellidos: " . $this->apellido_paterno . " " . $this->apellido_materno .  "\n" .
                "DNI: " . $this->dni;
    }
}

$persona = new Humano;
$persona->setNombre("Estiven")->setApellidos("Mejía")->setDni("0000-0000-00000")->imprimirDatos();