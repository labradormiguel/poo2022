<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 02</title>
        <style>
            table{
                width: 100%;
            }
            table,th,td{
                border: 1px black solid;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <h1>Ejercicio 02 de la práctica 01</h1>
        <table>
            <tr>
                <td>
                    <?php
                    // Podemos utilizar o comillas simples o comillas dobles para el texto
                    echo "Este texto está escrito utilizando la función echo de PHP";
                    ?>
                </td>
                <td>Este texto está escrito en HTML</td>
            </tr>
            <tr>
                <td>
                    <?php
                    print 'Este texto está escrito desde PHP con la función print';
                    ?>
                </td>
                <td>
                    <?= "Centro de formación Alpe" ?>
                </td>
            </tr>
        </table>

    </body>
</html>
