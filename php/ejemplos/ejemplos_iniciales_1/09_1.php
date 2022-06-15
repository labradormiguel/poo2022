<?php
// Creamos tres variables

$nombre = "Miguel";
$edad = 40;
$poblacion = "Santander";
?>

<style>
    table{
        width: 100%;
        text-align: center;
    }
    table,
    th,
    td{
        border: 1px solid black;
        border-collapse: collapse;
    }
    th{
        background-color: #F0F0F0;
    }
</style>

<table>
    <tr>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Población</th>
    </tr>
    <tr>
        <td><?php echo $nombre; ?></td>
        <td><?php echo $edad; ?></td>
        <td><?php echo $poblacion; ?></td>
    </tr>
</table>
