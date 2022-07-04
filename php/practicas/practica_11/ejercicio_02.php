<?php

function crearArray($min, $max, $total, $nombre) {
    
    $salida=[];
    
    for ($i = 0; $i < $total; $i++) {
            $nombre[$i] = mt_rand($min,$max);
    }
}
