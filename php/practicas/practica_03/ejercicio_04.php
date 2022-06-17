<?php

$numeros = [
    "cero" => 0,
    "uno" => 1,
    "dos" => 2,
    "tres" => 3,
    "cuatro" => 4,
];

$vocales=["a","e","i","o","u"];

echo $numeros["uno"];
var_dump($numeros);
echo "<br/>";
echo $vocales[1];
var_dump($vocales);
echo "<br/>";
$vocales[5] = "á";
echo $vocales[5];
var_dump($vocales);
echo "<br/>";
$numeros["cinco"] = 5;
echo $numeros["cinco"];
var_dump($numeros);