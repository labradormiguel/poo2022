<?php

$nota = 7;

// si es menor que 5 suspenso
// si está entre [5 y 6) suficiente
// si está entre [6 y 7) bien
// si está entre [7 y 9) notable
// si es mayor o igual que 9 sobresaliente

if ($nota < 5) {
    $salida = "suspenso";
} else if ($nota < 6) {
    $salida = "suficiente";
} else if ($nota < 7) {
    $salida = "bien";
} else if ($nota < 9) {
    $salida = "notable";
} else {
    $salida = "sobresaliente";
}

echo "Tienes un {$salida}.";
