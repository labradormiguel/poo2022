<?php

var_dump($_GET);
var_dump($_REQUEST);

$nombre = $_GET["nombre"];
$email = $_GET["email"];

echo "Escribe a {$nombre} a la siguiente dirección: {$email}";