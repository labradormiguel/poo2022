<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>08</title>
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
        $i = 0;
        do {
            ?>
            <div>
                <a href="<?= $enlaces[$i]["link"] ?>">
                    <?= $enlaces[$i]["label"] ?>
                </a>
            </div>

            <?php
            $i++;
        } while ($i < count($enlaces));

        // fin del menu
        ?>
    </body>
</html>


