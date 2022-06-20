<?php

$a = [
    "Lunes" => 100,
    "Martes" => 150,
    "Miercoles" => 300,
    "Jueves" => 10,
    "Viernes" => 50
];

$b = "Miercoles";

if (array_key_exists($b, $a)) {
    echo $a[$b];
} else {
    echo "No sé";
}