<?php
// paso de argumentos por referencia
function ver(&$p) {
    var_dump($p);
    $p=11;
    var_dump($p);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $global1 = 10;
        ver($global1);
        var_dump($global1);

        ?>
    </body>
</html>
