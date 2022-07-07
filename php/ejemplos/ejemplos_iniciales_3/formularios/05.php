<?php
// cuando pulses el botón de enviar quiero que me calcule la suma, el producto y la media de los tres números
// para calcular la suma utilizamos array_sum
// para calcular el producto utilizamos array_product
// para calcular la media utilizo una función creada por el usuario
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // colocar formulario para introducir tres números
        ?>
        <form action="05_salida.php" method="POST">
            <div>
                <label for="numero1">Número 1</label>
                <input type="text" id="numero1" name="numeros[]" required />
            </div>
            <div>
                <label for="numero2">Número 2</label>
                <input type="text" id="numero2" name="numeros[]" required />
            </div>
            <div>
                <label for="numero3">Número 3</label>
                <input type="text" id="numero3" name="numeros[]" required />
            </div>
            <div>
                <button>Calcular</button>
                <button type="reset">Limpiar formulario</button>
            </div>
        </form>
    </body>
</html>
