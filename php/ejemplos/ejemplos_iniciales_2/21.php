<?php

$datos = [
    "tabla1" => [
        "tabla11" => 12,
        1,
        2,
        3,
    ],
    "tabla2" => [
        "tabla21" => [1, 2, 3, 4],
        "tabla22" => 23,
    ],
];

// leer el 4 de la tabla 21

echo $datos["tabla2"]["tabla21"][3];