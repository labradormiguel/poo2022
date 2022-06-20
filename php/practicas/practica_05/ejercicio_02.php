<?php

$a = 10;
$b = 3;

if (($a % 2) == 0) { // punto 1 y punto 3
    echo "punto 1";
} else {
    echo "punto 2";
} echo "punto 3";

if (($b % 2) == 0) { // punto 2 y punto 3
    echo "punto 1";
} else {
    echo "punto 2";
} echo "punto 3";

/**
 * OPCION 1
 */

// crear un array directamente

$vocales=[
    "a","e","i","o","u"
];

var_dump($vocales);

/**
 * OPCION 2
 */

// crear un array con la función array()

$vocales=array(
    "a","e","i","o","u"
);

var_dump($vocales);