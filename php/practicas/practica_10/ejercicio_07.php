<?php

$n1 = $_POST["numero1"];
$n2 = $_POST["numero2"];

$suma = $n1 + $n2;
$resta = $n1 - $n2;
$producto = $n1 * $n2;
$division = $n1 / $n2;

echo "Suma: {$suma}";
echo "<br/>";
echo "Resta: {$resta}";
echo "<br/>";
echo "Producto: {$producto}";
echo "<br/>";
echo "División: {$division}";
