<?php

$radio = $_POST["radio"];
const PI = 3.1415926;

$longitud = number_format(PI * ($radio*2), 2) ;
$area = number_format(PI * ($radio**2),2);
$volumen = number_format((4/3) * (PI * ($radio**3)),2);



echo "Longitud: {$longitud}";
echo "<br/>";
echo "Área: {$area}";
echo "<br/>";
echo "Volumen: {$volumen}";
//ejemplos2