<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Hola clase</p>

        <?php
        echo "<p>Hola clase</p>";
        ?>

        <div>
            Alpe Formación
        </div>
        <div>
            <?php
            $texto = "Alpe Formación";
            echo $texto . $texto; // el punto para concatenar
            ?>
        </div>
        <div>
            <?php
            echo "-- {$texto} --"; // con comillas dobles sustituye la variable por su valor
            echo '$texto'; // con comillas simples pone la variable tal cual
            /* se recomienda poner llaves en las variables cuando hay más texto
             * para diferenciar, igual que en javascript
             */
            ?>
        </div>
        <?php
        echo "<div>{$texto}</div>";
        ?>

        <div>
            <?= $texto ?> <!-- modo contraído, solo sirve para imprimir -->
        </div>

    </body>
</html>
