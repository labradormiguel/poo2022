<?php

$dia = 6;

$dias_semana = [
    1 => "Lunes",
    2 => "Martes",
    3 => "Miercoles",
    4 => "Jueves",
    5 => "Viernes",
    6 => "Sabado",
    7 => "Domingo"
];

var_dump($dias_semana);

if (array_key_exists($dia, $dias_semana)) {
    echo $dias_semana[$dia];
}

echo "<br/>";

switch ($dia) {
    case 1:
        echo $dias_semana[1];
        break;
    case 2:
        echo $dias_semana[2];
        break;
    case 3:
        echo $dias_semana[3];
        break;
    case 4:
        echo $dias_semana[4];
        break;
    case 5:
        echo $dias_semana[5];
        break;
    case 6:
        echo $dias_semana[6];
        break;
    case 7:
        echo $dias_semana[7];
        break;
    default:
        echo "No sé";
        break;
}

echo "<br/>";

echo $dias_semana[$dia];
