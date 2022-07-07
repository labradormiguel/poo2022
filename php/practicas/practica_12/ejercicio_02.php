<link rel="stylesheet" href="css/style.css"/>
<div class="tiradas">
    <?php
    $suma = 0;
    $suma_array = [];

    for ($i = 0; $i < 10; $i++) {
        $tirada1 = mt_rand(1, 6);
        $tirada2 = mt_rand(1, 6);
        
        $suma_array[$i]=$tirada1+$tirada2;        

        if (($tirada1 + $tirada2) > $suma) {
            $suma = $tirada1 + $tirada2;
            $tirada = $i+1;
        }
        ?>

        <fieldset>
            <legend>Tirada #<?= $i+1 ?></legend>
            <div id="contenedor">
                <div id="numeros">
                    Dado #1: <?= $tirada1 ?>
                    <br/>
                    Dado #2: <?= $tirada2 ?>
                </div>
                <div id="dados">
                    <object data="<?= "imgs/" . $tirada1 . ".svg" ?>" type="image/svg+xml"></object>
                    <object data="<?= "imgs/" . $tirada2 . ".svg" ?>" type="image/svg+xml"></object>
                </div>
            </div>
        </fieldset>
        <?php
    }
    
    rsort($suma_array);
    var_dump($suma_array);
    ?>
</div>
<div>
    La tirada más grande fue la <?= $tirada ?> con un <?= $suma ?> en total.
    <br/>
    La tirada más grande fue un <?= $suma_array[0] ?> en total.
</div>