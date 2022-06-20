<?php

$positivos = [20, 4, 9, 10];
$impares = [1, 3, 5, 7];

var_dump($positivos);
var_dump($impares);

if ($positivos[0] > $impares[3]) {
    echo 'Es mayor el primero del array $positivos.';
} elseif ($impares[3] > $positivos[0]) {
    echo 'Es mayor el último del array $impares.';
} else {
    echo "Son iguales.";
}