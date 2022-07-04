<?php
$elementos = [
    [
        "color" => "red",
        "ancho" => "300px",
        "alto" => "20px",
        "texto" => "ejemplo 1"
    ],
    [
        "color" => "blue",
        "ancho" => "500px",
        "alto" => "50px",
        "texto" => "ejemplo 2"
    ],
    [
        "color" => "green",
        "ancho" => "200px",
        "alto" => "30px",
        "texto" => "ejemplo 3"
    ],
];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "bucke for";
        for ($i = 0; $i < count($elementos); $i++) {
            ?>
            <div style='background-color:<?= $elementos[$i]["color"] ?>;width:<?= $elementos[$i]["ancho"] ?>;height<?= $elementos[$i]["alto"] ?>'>
                <?= $elementos[$i]["texto"] ?>
            </div>
            <?php
        }
        ?>
        <?php
        echo "bucle while";
        $i = 0;
        while ($i < count($elementos)) {
            ?>
            <div style='background-color:<?= $elementos[$i]["color"] ?>;width:<?= $elementos[$i]["ancho"] ?>;height<?= $elementos[$i]["alto"] ?>'>
                <?= $elementos[$i]["texto"] ?>
            </div>
            <?php
            $i++;
        }
        ?>
        <?php
        echo "bucle do while";
        $i = 0;
        do {
            ?>
            <div style='background-color:<?= $elementos[$i]["color"] ?>;width:<?= $elementos[$i]["ancho"] ?>;height<?= $elementos[$i]["alto"] ?>'>
                <?= $elementos[$i]["texto"] ?>
            </div>
            <?php
            $i++;
        } while ($i < count($elementos))
        ?>
        <?php
        echo "bucle foreach";
        foreach ($elementos as $index=>$value) {
            ?>
            <div style='background-color:<?= $value["color"] ?>;width:<?= $value["ancho"] ?>;height<?= $value["alto"] ?>'>
                <?= $value["texto"] ?>
            </div>
            <?php
            $i++;
        }
            
            ?>        
    </body>
</html>
