<?php

function generarColor($numero){
    
    $salida = [];
    
    for ($i = 0; $i < $numero; $i++) {

        $salida[$i] = "#";
        
        for ($j = 0; $j < 6; $j++) {
        
            $salida[$i] = $salida[$i] . dechex(mt_rand(0,15));
            
        }
        
    }
    
    return $salida ;
        
}

$array = generarColor(10);

var_dump($array);
