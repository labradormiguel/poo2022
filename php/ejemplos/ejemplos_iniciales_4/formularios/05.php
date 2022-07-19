<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php
        if (isset($_POST["sumar"])) {
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
            echo $n1 + $n2;
        } elseif (isset($_POST["restar"])) {
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
            echo $n1 - $n2;
        } elseif (isset($_POST["multiplicar"])) {
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
            echo $n1 * $n2;
        } elseif (isset($_POST["dividir"])) {
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
            echo $n1 / $n2;
        }
        require_once './_formulario05.php';
        ?>
    </body>
</html>


