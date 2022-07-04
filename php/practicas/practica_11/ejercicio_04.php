<?php

function generarColor($numero, $posicion) {

    $salida = [];

    for ($i = 0; $i < $numero; $i++) {

        for ($j = 0; $j < 6; $j++) {

            $salida[$i] = $salida[$i] . dechex(mt_rand(0, 15));
        }

        if ($posicion == false) {

            $salida[$i] = $salida[$i] . "#";
        
        } else {

            $salida[$i] = "#" . $salida[$i];
        }
    }

    return $salida;
}

$array = generarColor(10, true);

var_dump($array);
