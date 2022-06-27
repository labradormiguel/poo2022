<?php
$nombre = $_POST["nombre"];
$color = $_POST["color"];
$alto = $_POST["alto"];
$peso = $_POST["peso"];
?>

<style>
    table,
    th,
    td{
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<table>
    <tr>
        <td>Nombre</td>
        <td><?= $nombre ?></td>
    </tr>
    <tr>
        <td>Color</td>
        <td><?= $color ?></td>
    </tr>
    <tr>
        <td>Alto</td>
        <td><?= $alto ?></td>
    </tr>
    <tr>
        <td>Peso</td>
        <td><?= $peso ?></td>
    </tr>
</table>