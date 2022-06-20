<?php

$dia = 10;
$mes = [
    1 => "Enero",
    2 => "Febrero",
    3 => "Marzo",
    4 => "Abril",
    5 => "Mayo",
    6 => "Junio",
    7 => "Julio",
    8 => "Agosto",
    9 => "Septiembre",
    10 => "Octubre",
    11 => "Noviembre",
    12 => "Diciembre"
];

switch ($dia) {
    case 1:
        echo $mes[1];
        break;
    case 2:
        echo $mes[2];
        break;
    case 3:
        echo $mes[3];
        break;
    case 4:
        echo $mes[4];
        break;
    case 5:
        echo $mes[5];
        break;
    case 6:
        echo $mes[6];
        break;
    case 7:
        echo $mes[7];
        break;
    case 8:
        echo $mes[8];
        break;
    case 9:
        echo $mes[9];
        break;
    case 10:
        echo $mes[10];
        break;
    case 11:
        echo $mes[11];
        break;
    case 12:
        echo $mes[12];
        break;
    default:
        echo "No es un mes correcto.";
        break;
}
