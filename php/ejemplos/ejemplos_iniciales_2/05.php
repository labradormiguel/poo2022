<?php

// comprobar si es par o impar

$numero = 23;

// solución 01

if ($numero % 2 == 0) {
    echo 'Es par';
} else {
    echo 'Es impar';
}

echo "<br/>";
// solución 02

$salida = "Es impar";

if ($numero % 2 == 0) {
    $salida = "Es par";
}

echo $salida;

echo "<br/>";
// solución 03

if ($numero % 2 == 0) {
    $salida = "Es par";
} else {
    $salida = "Es impar";
}

echo $salida;

echo "<br/>";
// solucion 04

if ($numero % 2) {
    $salida = "Es impar";
} else {
    $salida = "Es par";
}

echo $salida;