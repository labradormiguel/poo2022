<?php

// leer número enviado y mostrar tantos lis como el número indique

$numero = $_POST["numero"];

echo "<ul>";

for ($i = 1; $i <= $numero; $i++) {
    echo "<li>{$i}</li>";
}

echo "</ul>";
