<?php
/*
 * Creación de variables
 */
$nombre = "Miguel"; // variable de tipo string
$apellido = "Labrador";
$edad = 40; // variable de tipo entero

/**
 * Con dos asteriscos es para la documentación, phpdoc lo detecta y crea el pdf
 */

// a partir de aquí

echo "  <div>Nombre: {$nombre}</div>
            <div>Apellido: {$apellido}</div>
            <div>Edad: {$edad}</div> ";
            
?>

<div>Nombre: <?= $nombre; ?></div>
<div>Apellido: <?= $apellido; ?></div>
<div>Edad: <?= $edad; ?></div>