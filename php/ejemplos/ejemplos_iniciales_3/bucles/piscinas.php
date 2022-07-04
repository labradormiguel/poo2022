<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // creo una variable de tipo string con los datos
        // en formato JSON
        $datos=file_get_contents("https://datos.madrid.es/egob/catalogo/210227-0-piscinas-publicas.json");
        
        //creo una variable con los datos 
        // como array
        $piscinas=json_decode($datos,true);
        
        // principio menu
        ?>
        <div>
            <a href="<?= $piscinas["@graph"][0]["relation"]?>">
                <?= $piscinas["@graph"][0]["title"]?>
            </a>
        </div>
        <?php
        
        // fin menu
        ?>
    </body>
</html>
