<?php

function media($array){
    $resultado = 0;
    foreach ($array as $value) {
        $resultado += $value;
    }
    return $resultado / count($array);
}

$numeros = $_POST["numeros"];

echo "Suma: ".array_sum($numeros);
echo "<br/>";
echo "Producto: ".array_product($numeros);
echo "<br/>";
echo "Media: ".media($numeros);