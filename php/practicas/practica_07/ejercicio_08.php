<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $alumnos = [];
        $alumnos[] = "Ramón";
        $alumnos[] = "Jose";
        $alumnos[] = "Pepe";
        $alumnos[] = "Ana";

        $alumnos1 = ["Ramón", "Jose", "Pepe", "Ana"];

        for ($c = 0; $c < count($alumnos); $c++) {
            echo "$alumnos[$c]<br/>";
        }

        foreach ($alumnos1 as $v) {
            echo "$v<br/>";
        }
        ?>
    </body>
</html>
