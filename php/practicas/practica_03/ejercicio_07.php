<?php

$datos=[
    [
        "nombre" => "Eva",
        "edad" => 50
    ],
    [
        "nombre" => "Jose",
        "edad" => 40,
        "peso" => 80
    ]
];

echo "Número de registros en el array datos: " . count($datos);
var_dump($datos);
echo "<br/>";
echo "Número de elementos en el registro Eva: " . count($datos[0]);
var_dump($datos[0]);