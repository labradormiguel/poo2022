<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>03</title>
    </head>
    <body>
        <?php
        // array con números
        $a=[1,2,3,4];
        
        for ($index = 0; $index < count($a); $index++) {
            echo "<div>{$index} ➡ {$a[$index]}</div>";
}
        ?>
    </body>
</html>
