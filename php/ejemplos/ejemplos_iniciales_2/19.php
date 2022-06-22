<?php

$tiradas = [
    [
        "dado1" => mt_rand(1, 6),
        "dado2" => mt_rand(1, 6),
    ],
    [
        "dado1" => mt_rand(1, 6),
        "dado2" => mt_rand(1, 6),
    ],
];

var_dump($tiradas);

// quiero leer el dado1 de la tirada 1

echo $tiradas[0]["dado1"];
