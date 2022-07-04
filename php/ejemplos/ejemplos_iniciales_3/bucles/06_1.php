<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>06_1</title>
    </head>
    <body>
        <?php
        
        $enlaces = [
            [
                "title" => "Enlaces principales",
            ],
            [
                [
                    "label" => "Buscador google",
                    "link" => "https://www.google.es",
                ],
                [
                    "label" => "Buscador Bing",
                    "link" => "https://www.bing.com",
                ],
                [
                    "label" => "Pagina web de Alpe",
                    "link" => "https://alpeformacion.es",
                ]
            ]
        ];

        // colocamos el titulo del menu
        ?>
        <h2><?= $enlaces[0]["title"] ?></h2>
        <?php
        // comienzo el menu
        for($i=0;$i<count($enlaces[1]);$i++){
            ?>
            <div>
                <a href="<?= $enlaces[1][$i]["link"] ?>">
                    <?= $enlaces[1][$i]["label"] ?>
                </a>
            </div>

            <?php
        }
        // fin del menu
        ?>
    </body>
</html>
