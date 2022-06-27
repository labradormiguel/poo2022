<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //if($_GET){ // si has cargado primero el formulario
        if(isset($_GET["boton"])){ // si has pulsado el boton llamado boton
        // crear variables con el nombre 
        // de los controles de formulario
        $nif=$_GET["nif"];
        $nombre=$_GET["nombre"];
        ?>
        
        <div>
            NIF <?= $nif ?>
        </div>
        <div>
            Nombre <?= $nombre ?>
        </div>
        <?php
        }
        ?>
    </body>
</html>
