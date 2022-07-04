<?php

$url = "http://localhost/miguel/poo2022/apiRest/ejemplo1restyii/web/index.php/pelicula";

$salida = file_get_contents($url);

var_dump($salida);

// trabajando con array de objetos
$datos=json_decode($salida); // array de objetos
// nombre de la segunda pelicula
    echo $datos[2]->nombre;
    
var_dump($datos);

// trabajando con array de arrays
$datos = json_decode($salida,true); // array de arrays
// nombre de la segunda pelicula
    echo $datos[2]["nombre"];
var_dump($datos);

