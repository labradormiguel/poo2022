<?php
    // definir la funcion
  
    /**
     * imprime en pantalla un texto
     */
    function sumar(){
        echo "<div>";
        echo "sumando";
        echo "</div>";
    }
    
    /**
     * Funcion que retorna un texto
     * @return string
     */
    function sumar1(){
        $mensaje=""; // variable local
        
        $mensaje.="<div>"; // $mensaje = $mensaje . "<div>"
        $mensaje.="Sumando"; // $mensaje = $mensaje . "Sumando"
        $mensaje.="</div>"; // $mensaje = $mensaje . "</div>"
        return $mensaje;  // la funcion retorna la variable
    }
    
    /**
     * Devuelve la suma de dos numeros
     * @param int $numero1 primer numero
     * @param int $numero2 segundo numero
     * @return int
     */
    function sumar2($numero1,$numero2){
        $salida="<div>";
        $salida.=($numero1+$numero2);
        $salida.="</div>";
        return $salida;
    }
    
    /**
     * Funcion que suma dos numeros
     * @param int $numero1 primer numero
     * @param int $numero2 segundo numero
     * @param string $contenedor etiqueta que contiene el resultado de la suma
     * @return string
     */
    
    function sumar3($numero1,$numero2,$contenedor){
        $salida="<" . $contenedor . ">";
        $salida .= ($numero1 + $numero2);
        $salida .= "</" . $contenedor . ">";
        return $salida;
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        // llama a la funcion
        sumar();
        sumar();
        sumar();
        
        echo sumar1();
        echo sumar1();
        
        $s= sumar2(3,5);
        echo $s;
        
        $s=sumar2(55,67);
        echo $s;

        echo sumar3(4,9,"div");
        echo sumar3(4,9,"li");
        ?>
    </body>
</html>
