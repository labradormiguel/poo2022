<h3>Generado con HTML</h3>

<ul>
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    <li>5</li>
</ul>

<h3>Generado con PHP usando un bucle for que recorre el array $numeros</h3>

<ul>

    <?php
    $numeros = [1, 2, 3, 4, 5];

    for ($i = 0; $i < count($numeros); $i++) {
        echo "<li>{$numeros[$i]}</li>";
    }
    ?>

</ul>

<h3>Generado con PHP usando un bucle for y un contador</h3>

<ul>

    <?php
    for ($contador = 1; $contador <= 5; $contador++) {
        echo "<li>{$contador}</li>";
    }
    ?>

</ul>
