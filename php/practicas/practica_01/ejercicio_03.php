<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 03</title>
    </head>
    <body>
        <h2>Método 01</h2>
        <?php
        // Mezclamos HTML y PHP
        echo '<p>Hola mundo</p>';
        ?>
        <h2>Método 02</h2>
        <p>
            <?php
            // Sólo coloco php
            echo "Hola mundo";
            ?>
        </p>
        <h2>Método 03</h2>
        <?php
        echo "<p>";
        ?>
        Hola mundo
        <?php
        echo "</p>";
        ?>

        <h2>Podemos utilizar el método contraído del echo</h2>
        <p>
            <?= "Hola mundo" ?>
        </p>
    </body>
</html>
