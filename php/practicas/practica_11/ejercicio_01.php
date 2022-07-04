<?php

function crearArray($min, $max, $total) {
    
    $salida=[];
    
    for ($i = 0; $i < $total; $i++) {
            $salida[$i] = mt_rand($min,$max);
    }
    return $salida;
}

$array = crearArray(1, 10, 20);

var_dump($array);

$array = crearArray(1, 100, 5);

var_dump($array);

