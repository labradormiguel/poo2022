<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $entero = 10;
        $cadena = "hola";
        $real = 23.6;
        $logico = true;

        var_dump($entero);
        var_dump($cadena);
        var_dump($real);
        var_dump($logico);

        $logico = (int) $logico;
        $entero = (float) $entero;
        settype($logico, "int");

        var_dump($entero);
        var_dump($cadena);
        var_dump($real);
        var_dump($logico);
        ?>
    </body>
</html>
