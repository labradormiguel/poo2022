<?php

// leer número enviado y mostrar tantos lis como el número indique

$min = $_POST["min"];
$max = $_POST["max"];

echo "<ul>";

if ($min < $max) {
    for ($i = $min; $i <= $max; $i++) {
        echo "<li>{$i}</li>";
    }
} else {
    echo "Vuelve a introducir los números";
}
echo "</ul>";
