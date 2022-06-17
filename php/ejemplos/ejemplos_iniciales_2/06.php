<?php

$nota = 7;

// Si la nota es menor que 5: suspenso
// Si es mayor: aprobado

$salida = "Está suspenso";

if ($nota >= 5) {
    $salida = "Está aprobado";
}

echo "{$salida}, tiene un {$nota}.";

echo "<br/>";

$salida=["suspenso","aprobado"];

$nota=$nota/10;

$posicion = round($nota);

echo "<br/>";

echo "Está {$salida[$posicion]}.";