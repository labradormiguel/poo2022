<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $url = "http://localhost/miguel/poo2022/apiRest/ejemplo1restyii/web/index.php/pelicula";
        $salida = file_get_contents($url);
        $salida = json_decode($salida);
        var_dump($salida); // todos
        var_dump($salida[0]); // datos primera peli
        
        // quiero 10 numeros aleatorios
        $url = "http://localhost/miguel/poo2022/apiRest/ejemplo1restyii/web/index.php/site/numeros?cantidad=100";
        $salida = file_get_contents($url);
        $salida = json_decode($salida);
        var_dump($salida); // todos
        var_dump($salida[0]); // datos primera peli
        ?>
    </body>
</html>

