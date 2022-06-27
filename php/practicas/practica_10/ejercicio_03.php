<?php

$caracter = $_POST["caracter"];
$vocales = ["a","e","i","o","u"];

if (in_array($caracter, $vocales)==true){
    echo "Es una vocal.";
}else{
    echo "No es una vocal.";
}
