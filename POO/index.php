<?php

declare(strict_types=1);
require_once "./objetos/persona.php";

$persona = new Persona("EstIvEn meJía", "mejía", 23);

echo "\nEl nombre de la primera persona es " . $persona->getNombre() . ' ' . $persona->getApellido() . "\n";
print_r($persona);

/* Los setter reducen esta declaración de datos.
$persona->nombre = "EstIvEn Mejia"; 
$persona->apellido = "MeJia"; 
$persona->edad = 23;
*/
# echo "El nombre de la primera persona es " .  ucwords(strtolower($persona->nombre)) . ' ' . ucwords(strtolower($persona->apellido))."\n";
# echo "\nEl nombre de la primera persona es " . ucwords(strtolower($persona->getNombre())) . ' ' . ucfirst(strtolower($persona->getApellido())) . "\n";

/* El constructor reduce esta declaración de datos.
$persona->setNombre("EstIvEn meJía");
$persona->setApellido("Mejía");
$persona->setEdad(23);
*/

$persona2 = new Persona("josuE roDRíguez", "rodriguez", 22); 

echo "\nEl nombre de la primera persona es " . $persona->getNombre() . ' ' . $persona->getApellido() . "\n";
print_r($persona);

/* Los setter reducen esta declaración de datos.
$persona->nombre = "JosuE";
$persona->apellido = "Rodriguez";
$persona->edad = 22; 
*/
# echo "\nEl nombre de la primera persona es " . ucwords(strtolower($persona->getNombre())) . ' ' . ucfirst(strtolower($persona->getApellido())) . "\n";

/* El constructor reduce esta declaración de datos
$persona->setNombre("josuE roDRíguez");
$persona->setApellido("rodriguez");
$persona->setEdad(23);
*/

