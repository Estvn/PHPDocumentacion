<?php
/**
 * Una clase final, es una clase que no podrá ser heredada, es la última de su rama.
 * Al igual que existen clases y métodos abstractos, también hay clases y métodos finales.
 */

class Hogar{

    public string $color, $seguridad;

    # Este método no puede ser sobreescrito.
    public final function saludar():void{
        echo "Bienvenido a mi hogar";
    }
}

# Está clase no puede ser padre
final class Departamento extends Hogar{}

$departamento = new Departamento;
$departamento->saludar();