<?php

$a = [
    "Lunes" => 100,
    "Martes" => 150,
    "Miercoles" => 300,
    "Jueves" => 10,
    "Viernes" => 50
];

$b = "Miercoles";

switch ($b) {
    case "Lunes":
        echo $a["Lunes"];
        break;
    case "Martes":
        echo $a["Martes"];
        break;
    case "Miercoles":
        echo $a["Miercoles"];
        break;
    case "Jueves":
        echo $a["Jueves"];
        break;
    case "Viernes":
        echo $a["Viernes"];
        break;
    default:
        echo "No sé";
        break;
}