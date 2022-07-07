<?php
// creo las funciones

/**
 * funcion que multiplica 3 numeros que le paso como parametros. 
 * El producto lo debe retornar
 * @param int $n1 numero 1
 * @param int $n1 numero 2
 * @param int $n1 numero 3
 * @return int Producto de los 3 numeros
 */

// opcion1
function producto($n1,$n2,$n3){
    $resultado=0;
    
    $resultado=$n1*$n2*$n3;
    return $resultado;
}
// opcion 2
//function producto($n1,$n2,$n3){
//    $resultado=$n1*$n2*$n3;
//    return $resultado;
//}

// opcion 3
//function producto($n1,$n2,$n3){
//    return $n1*$n2*$n3;
//}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // llamo a las funciones
        echo producto(2.4,3,2);
        ?>
    </body>
</html>
