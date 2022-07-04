<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>05_1</title>
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
        foreach ($enlaces[1] as $indice => $enlace) {
            ?>
            <div>
                <a href="<?= $enlace["link"] ?>">
                    <?= $enlace["label"] ?>
                </a>
            </div>

            <?php
        }
        // fin del menu
        ?>
    </body>
</html>
