<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>05</title>
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
        foreach ($enlaces as $indice => $enlace) {
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
