<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $alumno = ["Ramón","Jose","Pepe","Ana"];

        echo $alumno[0];
        echo $alumno[1];
        echo "<br/>";
        echo $alumno[2];
        echo "<br/>";
        echo $alumno[3];
        ?>
        <div>
            <?php
                    for ($i = 0; $i < count($alumno); $i++) {
                        echo "$alumno[$i]<br/>";
                    }
            ?>
        </div>
    </body>
</html>
