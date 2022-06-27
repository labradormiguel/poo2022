<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="04_salida.php">
            <div>
                <label for="minimo">Introduce valor minimo</label>
                <input type="number" name="minimo" id="minimo" value="0"/>
            </div>
            <div>
                <label for="maximo">Introduce valor maximo</label>
                <input type="number" value="0" name="maximo" id="maximo"/>
            </div>
            <div>
                <label for="paso">Introduce paso</label>
                <input type="number" value="1" name="paso" id="paso"/>
            </div>
            <div>
                <button name="boton">Enviar</button>
                <button type="reset">Limpiar formulario</button>
            </div>
            
        </form>
    </body>
</html>
