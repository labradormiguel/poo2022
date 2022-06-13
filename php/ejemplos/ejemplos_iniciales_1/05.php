<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo 05</title>
    </head>
    <body>
        <?php
        //array enumerado, los índices son números
        $vector=[
          1,"suspenso",3,4,5,6  
        ];
        
        /*
        $vector=array(1,"suspenso",3,4,5,6);

        método viejo para crear arrays
         */
        
        var_dump($vector); // depurando la variable vector
        
        //array asociativo, los índices son textos
        $alumno=[
            "nombre"  => "Miguel",
            "edad" => 40            
        ];
        
        var_dump($alumno); //depurando la varaible alumno
        
        ?>
    </body>
</html>
 