<?php

final class Humano{

    /*
    public string $nombre, $apellido_materno, $apellido_paterno, $dni;
    public function __construct(string $nombre, string $apellido_paterno, string $apellido_materno, string $dni) {
        $this->nombre = $nombre;
        $this->apellido_paterno = $apellido_paterno;
        $this->apellido_materno = $apellido_materno;
        $this->dni = $dni;
    }
        */

    public function __construct(protected string $nombre, protected string $apellido_paterno, protected string $apellido_materno, protected string $dni){}

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
                "DNI: " . $this->dni . "\n\n";
    }
}

$persona2 = new Humano(nombre:"Estiven", apellido_materno:"Rodríguez", apellido_paterno:"Mejía", dni:"0000-0000-12345");
$persona2->imprimirDatos();

//$persona = new Humano("Estiven", "Mejía", "Rodríguez", "0000-0000-12345");
//$persona->setNombre("Estiven")->setApellidos("Mejía")->setDni("0000-0000-00000")->imprimirDatos();
//$persona->imprimirDatos();