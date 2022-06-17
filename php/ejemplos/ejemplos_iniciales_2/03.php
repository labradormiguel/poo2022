<?php

$nombre = "Ana";
$edad = 35;

// heredoc
$salida = <<<DATOS
        <div>$nombre</div>
        <div>$edad</div>
DATOS;

//$salida = <<<"DATOS" // si se pone entre comillas dobles pondrá lo siguiente entre comillas dobles
//        <div>$nombre</div> // si se pusiera entre comillas simples lo pondría entre comillas simples
//        <div>$edad</div>
//DATOS;

// $salida = "<div>$nombre</div><div>$edad</div>";

echo $salida;
