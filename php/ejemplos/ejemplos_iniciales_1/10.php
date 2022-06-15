<?php

// creamos variables

$datos = [
    "nombre" => "Miguel",
    "edad" => 40,
    "poblacion" => "Santander"
];

// leer el nombre

echo "<div>{$datos["nombre"]}</div>"; // Miguel

// leer la población

echo "<div>{$datos["poblacion"]}</div>"; // Santander

// cambiar la edad de 40 a 50

$datos["edad"] = 50;

?>

<style>
    table{
        width: 50%;
        text-align: center;
    }
    table,
    td{
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<table>
    <tr>
        <td>Nombre</td>
        <td><?= $datos["nombre"] ?></td>
    </tr>
    <tr>
        <td>Población</td>
        <td><?= $datos["poblacion"] ?></td>
    </tr>
    <tr>
        <td>Edad</td>
        <td><?= $datos["edad"] ?></td>
    </tr>
</table>
