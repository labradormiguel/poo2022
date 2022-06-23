<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $direccion = $_POST["direccion"];
        $cp = $_POST["cp"];
        $telefono = $_POST["telefono"];
        $email = $_POST["email"];
        
        echo "<div>Nombre: {$nombre}</div>";
        echo "<div>Apellidos: {$apellidos}</div>";
        echo "<div>Dirección: {$direccion}</div>";
        echo "<div>Código postal: {$cp}</div>";
        echo "<div>Teléfono: {$telefono}</div>";
        echo "<div>Email: {$email}</div>";
        ?>
    </body>
</html>
