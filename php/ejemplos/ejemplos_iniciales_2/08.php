<?php

$nombre = "Rosa";
$edad = 45.4;

var_dump($nombre, $edad); // depurar nombre y edad

echo $nombre; // obtener el valor de la variable

echo "<br/>";

echo gettype($nombre); // obtener el tipo de la variable

echo "<br/>";

// control de tipo de la variable
if (is_float($edad)) {
    echo "Es un número real.";
}else{
    echo "No es un número real.";
}

echo "<br/>";

if (gettype($edad) == "double") {
    echo "Es un número real.";
}else{
    echo "No es un número real.";
}