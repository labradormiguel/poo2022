<?php

$datos = [2, 6, 89]; // array enumerado

$valores = [
    "id" => 1,
    "nombre" => "ana"
]; // array asociativo
// calculando la longitud del array datos
$longitud1 = count($datos);

// calculando la longitud del array valores
$longitud2 = count($valores);

?>

<ul>
    <li>Longitud: <?= $longitud1 ?></li>
    <li><?= $datos[0] ?></li>
    <li><?= $datos[1] ?></li>
    <li><?= $datos[2] ?></li>
</ul>

<?php
// mostrar el segundo array en una tabla
?>

<style>
    table,
    th,
    td{
        border: 1px solid black;
        border-collapse: collapse;
    }
    td{
        text-align: center;
    }
</style>

<table>
    <tr>
        <th>Longitud: <?= $longitud2 ?></th>
    </tr>
    <tr>
        <td><?= $valores["id"] ?></td>
    </tr>
    <tr>
        <td><?= $valores["nombre"] ?></td>
    </tr>
</table>