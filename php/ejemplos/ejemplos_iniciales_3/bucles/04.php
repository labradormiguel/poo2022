<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>04</title>
    </head>
    <body>
        <?php
        // array con números
        $a = [1, 2, 3, 4];

        foreach ($a as $key => $value) {
            echo "<div>{$key} ➡ {$value}</div>";
        }
        ?>
    </body>
</html>
