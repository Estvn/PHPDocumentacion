<?php

$fecha = date('Y/m/d'); // Usando un método para obtener fecha.
$variable = 'Estiven J. Mejía'; // Las variables son de tipado débil.

define('CONSTANTE', 200); // Definiendo una variable constante.
define("VALOR_1", 'qwerty');

// Definición de arreglos
define('ARREGLO_SIMPLE', [1,2,3,4,5,6,7,8]);
define('ARREGLO_ASOCIATIVO', ['val1' => 'Valor 1', 'val2' => 'Valor 2']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>La fecha es: <?php echo $fecha; ?></h1>
    <p>El nombre del desarrollador es: <?= $variable; ?></p>
    <hr>

    <p>El valor de la constante es: <?= CONSTANTE; //Las constantes no usan el $ ?></p>
    <strong> <?= VALOR_1; ?> </strong>
    <hr>

    <h3>Arreglos en constantes</h3>

    <?php if(defined('ARREGLO_SIMPLE') && defined('ARREGLO_ASOCIATIVO')): ?>
        <p> <?= ARREGLO_SIMPLE[0]; ?> </p>
        <p> <?= ARREGLO_ASOCIATIVO['val1']; ?>  </p>
    <?php else: ?>
        <p>No existen los arreglos</p>
    <?php endif; ?>

    <p> Mi versión de PHP es: <?= PHP_VERSION; ?> </p>
    <p> Mi sistema operativo es: <?= PHP_OS; ?> </p>
</body>
</html>