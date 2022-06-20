<?php

$a = [1,2,3,4,5,6,7,8,9,10];

shuffle($a);
$numeros = array_rand($a, 3);

echo "<p>Los números son el " . $a[$numeros[0]] . ", el " . $a[$numeros[1]] . " y el "
        . $a[$numeros[2]] . "</p>";

if ($a[$numeros[0]] > $a[$numeros[1]]) {
    if ($a[$numeros[0]] > $a[$numeros[2]]) {
        echo "El mayor es el " . $a[$numeros[0]];
    } else {
        echo "El mayor es el " . $a[$numeros[2]];
    }
} elseif ($a[$numeros[1]] > $a[$numeros[0]]) {
    if ($a[$numeros[1]] > $a[$numeros[2]]) {
        echo "El mayor es el " . $a[$numeros[1]];
    } else {
        echo "El mayor es el " . $a[$numeros[2]];
    }
}
