<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $url = "http://localhost/miguel/poo2022/apiRest/ejemplo1restyii/web/index.php/site/numeros?cantidad=3";
        $salida = file_get_contents($url);
        $salida = json_decode($salida);
        var_dump($salida);

        if ($salida[0] > $salida[1]) {
            if ($salida[0] > $salida[2]) {
                echo "El primero es mayor: $salida[0]";
            } else {
                echo "El útlimo es mayor: $salida[2]";
            }
        } elseif ($salida[1] > $salida[0]) {
            if ($salida[1] > $salida[2]) {
                echo "El segundo es mayor: $salida[1]";
            } else {
                echo "El tercero es mayor: $salida[2]";
            }
        }
        ?>
    </body>
</html>
