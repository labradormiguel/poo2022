<?php

$edad = "40"; // al introducir un numero por formulario siempre la coge como texto

$edadNumero = (int) $edad;
settype($edad, "int");

var_dump($edad,$edadNumero);

$a=[1,4,3,5,6,7,3,4,6,7];
$b = sort($a);
var_dump($a);
var_dump($b);