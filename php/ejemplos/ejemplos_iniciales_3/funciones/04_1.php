<?php

// funcion sumar con numero de argumentos variable

function sumar() {
    $numeros = func_get_args();
    $resultado = 0;
    foreach ($numeros as $value) {
        $resultado += $value; // $resultado = $resultado + $value
    }

//    for ($i = 0; $i < count($numeros); $i++) {
//        $resultado += $numeros[$i];
//    }
    return $resultado;
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>sumar</title>
    </head>
    <body>
        <?php
        echo sumar(1, 2, 3, 4);
        echo "<br/>";
        echo sumar(1, 2);
        ?>
    </body>
</html>