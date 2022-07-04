<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>06</title>
    </head>
    <body>
        <?php
        $enlaces = [
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
        ];

        // comienzo el menu
        for ($c = 0; $c < count($enlaces); $c++) {
            ?>
            <div>
                <a href="<?= $enlaces[$c]["link"] ?>">
                    <?= $enlaces[$c]["label"] ?>
                </a>
            </div>

            <?php
        }
        // fin del menu
        ?>
    </body>
</html>
