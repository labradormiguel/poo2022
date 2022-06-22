<?php

$alumnos = [];

$alumnos[] = [
    "nombre" => "jose",
    "nota" => 0,
];

$alumnos[] = [
    "nombre" => "ana",
    "nota" => 0,
];

$alumnos[] = [
    ["nombre" => "jose",
        "nota" => 0,],
    ["nombre" => "ana",
        "nota" => 0,],
];

var_dump($alumnos);
