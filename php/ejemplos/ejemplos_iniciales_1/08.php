<h3>Lista del 90 al 80</h3>
<ul>

    <?php
// listado de los números del 90 al 80
// utilizar lista no numeradas

    for ($i = 90; $i >= 80; $i--) {
        echo "<li>{$i}</li>";
    }
    ?>


</ul>
<h3>Lista del 1 al 50, sólo números impares</h3>
<ul>

    <?php
// listado del 1 al 50 pero
// solo los números impares
// con lista no numerada

    //for ($i = 1; $i <= 50; $i+=2) {
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 2 != 0) {
            echo "<li>{$i}</li>";
        }
    }
    ?>

</ul>