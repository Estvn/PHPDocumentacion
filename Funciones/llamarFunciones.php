<?php

//include 'funcionSimple.php'; -> Si no encuentra el archivo genera un warning y sigue ejecutando.
//include_once 'funcionSimple.php'; -> Revisa que solo haya un llamado al archivo
//require 'funcionSimple.php'; -> Si no encuentra el archivo genera un error fatal y detiene la ejecución.
require_once 'funcionSimple.php'; 

echo factorial2(9);