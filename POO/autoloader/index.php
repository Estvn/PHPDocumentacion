<?php

/*
require_once "./Controllers/courseController.php";
require_once "./Models/course.php";
*/

# Use esta función para importar automáticamente las clases indicadas en los use.
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

use Controllers\CourseController as CursoControllador;
use Models\Course as Curso;

$cursoControlador = new CursoControllador;
$cursoModelo = new Curso;

$cursoControlador->nombreCurso();
$cursoModelo->metodoCurso();