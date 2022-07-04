<?php

$cantidad = $_POST["cantidad"];

if ($cantidad < 1000) {
    $descuento = round($cantidad - ($cantidad * 0.01));
    echo "Descuento de 1%, de {$cantidad} se queda en {$descuento}.";
} elseif ($cantidad < 10000) {
    $descuento = round($cantidad - ($cantidad * 0.02));
    echo "Descuento de 2%, de {$cantidad} se queda en {$descuento}.";
} else {
    $descuento = round($cantidad - ($cantidad * 0.05));
    echo "Descuento de 5%, de {$cantidad} se queda en {$descuento}.";
}

echo "<hr/>";

switch (true) {
    case ($cantidad < 1000):
        $descuento = round($cantidad - ($cantidad * 0.01));
        echo "Descuento de 1%, de {$cantidad} se queda en {$descuento}.";
        break;
    case ($cantidad < 10000):
        $descuento = round($cantidad - ($cantidad * 0.02));
        echo "Descuento de 2%, de {$cantidad} se queda en {$descuento}.";
        break;
    default:
        $descuento = round($cantidad - ($cantidad * 0.05));
        echo "Descuento de 5%, de {$cantidad} se queda en {$descuento}.";
}
