<style>
    table, tr, th, td{
        border:1px solid black;
        padding:10px;
    }
    thead{
        background-color: #ccc;
    }
    tbody{
        background-color: #aaa;
    }
</style>

<?php
// colocar las siguientes variables en una tabla colocando
// como encabezado de la tabla los nombres de las variables

$nombre = "Alpe";
$direccion = "Pasaje de peña 1";
$poblacion = "Santander";
?>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Población</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $nombre ?></td>
            <td><?= $direccion ?></td>
            <td><?= $poblacion ?></td>
        </tr>
    </tbody>
</table>