<?php

declare(strict_types=1);

# Use require_once para importar archivos si no usa el Autoloader.
require_once "./carpeta1/humano.php";
require_once "./carpeta2/humano.php";
/*
$humano1 = new carpeta1\Humano;
$humano2 = new carpeta2\Humano;
*/

use carpeta1\Humano as Humano1;
use carpeta2\Humano as Humano2;

$humano1 = new Humano1;
$humano2 = new Humano2;

$humano1->saludar();
$humano2->saludar();
