<?php

$letras = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E", "T"];

$dni = 72057873;
$letra_dni = "T";

if ($dni > 0 && $dni <= 99999999) {
    $resultado = ($dni % 23);
    if ($letras[$resultado] == $letra_dni) {
        echo "Efectivamente, la letra del número " . $dni . " es la " . $letras[$resultado];
    } else {
        echo "La letra del número " . $dni . " es la " . $letras[$resultado] . ", no la " . $letra_dni;
    }
} else {
    echo "Introduce un número válido";
}

