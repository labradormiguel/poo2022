<?php
// funcion sumar con numero de argumentos variable

/**
 * Suma los números pasados como argumentos
 * @param array $numeros Array de números enteros
 * @return int Suma de los números
 */
function sumar($numeros) {

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
echo sumar([1, 2, 3, 4]);
echo "<br/>";
echo sumar([1, 2]);
?>
    </body>
</html>