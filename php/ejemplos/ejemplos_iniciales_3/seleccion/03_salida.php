<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // comprobar si has pulsado el boton
        if (isset($_GET["boton"])) {
            $numero1 = $_GET["numero1"];
            $numero2 = $_GET["numero2"];

            // comprobar si el numero1 es mayor que el 2
            if ($numero1 > $numero2) {
                echo "El numero 1 es mayor y vale {$numero1}";
            }else{
                echo "El numero 2 es mayor y vale {$numero2}" ;
            }
        }
        ?>
    </body>
</html>
