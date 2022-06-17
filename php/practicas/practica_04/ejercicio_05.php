<?php

$numeros=[23,45,67,2,123];

?>

<style>
    table,
    td{
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
</style>

<table>
    <tr>
        <td><?= $numeros[0] ?></td>
    </tr>
    <tr>
        <td><?= $numeros[1] ?></td>
    </tr>
    <tr>
        <td><?= $numeros[2] ?></td>
    </tr>
    <tr>
        <td><?= $numeros[3] ?></td>
    </tr>
    <tr>
        <td><?= $numeros[4] ?></td>
    </tr>
</table>