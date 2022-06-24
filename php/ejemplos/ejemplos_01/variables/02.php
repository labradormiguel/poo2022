<?php
// utilizar la variable en cada una de las salidas en
// vez de utilizar el texto de forma literal
$texto = "hola";
?>

<?php
echo "<p>{$texto}</p>";
?>


<p>
    <?php
    echo $texto;
    ?>
</p>

<p>
    <?= $texto ?>
</p>
