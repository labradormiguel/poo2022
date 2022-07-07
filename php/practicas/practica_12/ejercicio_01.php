<?php

    $tirada1 = mt_rand(1,6);
    $tirada2 = mt_rand(1,6);
    
    $suma = $tirada1 + $tirada2;
    
?>

<style>
    object{
        width: 100px;
        height: 100px;
    }
</style>

<object data="<?= "imgs/".$tirada1.".svg" ?>" type="image/svg+xml"></object>
<object data="<?= "imgs/".$tirada2.".svg" ?>" type="image/svg+xml"></object>
<br/>
Total: <?= $suma ?>