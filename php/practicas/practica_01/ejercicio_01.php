<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 01</title>
    </head>
    <body>
        <div>Es texto escrito directamente en HTML</div>
        <?php
        // Comentario de línea
        echo "texto escrito desde PHP <br />";

        /*
         * Comentario de varias líneas
         */
        print "Texto escrito desde PHP";
        ?>
        <h1>Segunda parte</h1>
        <?php
        # Comentario de una línea
        $a = 10; # variable de tipo entero
        echo "Escribir en PHP para colocar el valor de la variable {$a}";
        ?>
    </body>
</html>
