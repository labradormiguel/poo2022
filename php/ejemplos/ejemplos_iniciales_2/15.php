<?php

$numeros = [];

// añadir elementos a un array
// meter algo al final del array
$numeros[] = 23; // lo mete en la posición 0

$numeros[] = 50; // esto en la posición 1

$numeros[5] = 100; // esto entra en la posición 5

var_dump($numeros);

$caracteres = [];
// introducir elementos mediante push

// introducir una a
$caracteres[] = "a";                    // opción A
array_push($caracteres, "a");   // opción B


// introducir b y c
// opción 1
$caracteres[] = "b";
$caracteres[] = "c";

// opción 2
array_push($caracteres,"b","c");

var_dump($caracteres);