<?php

function promedio(...$numeros) {
    $suma = 0;
    foreach ($numeros as $value) {
        $suma += $value;
    }
    return $suma / count($numeros);
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php
        echo promedio(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        ?>
    </body>
</html>