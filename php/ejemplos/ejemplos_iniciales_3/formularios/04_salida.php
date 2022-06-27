<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            // comprobar si he pulsado el boton
            if(isset($_GET["boton"])){
                $minimo=$_GET["minimo"];
                $maximo=$_GET["maximo"];
                $paso=$_GET["paso"];
        ?>
        <div>
            Minimo: <?= $minimo ?>
        </div>
        <div>
            Maximo: <?= $maximo ?>
        </div>
        <div>
            Paso: <?= $paso ?>
        </div>
        <?php
            }
        ?>
    </body>
</html>
