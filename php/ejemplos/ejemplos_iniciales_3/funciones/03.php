<?php

function sumar(int $numero1,int $numero2):int{
    $salida=$numero1+$numero2;
    return $salida;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo sumar(1.99999, 3);
        ?>
    </body>
</html>
