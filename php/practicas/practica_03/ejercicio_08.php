<?php

$datos=[
    [
        "nombre" => "Eva",
        "edad" => 50
    ],
    [
        "nombre" => "Jose",
        "edad" => 40,
        "peso" => 80
    ]
];

$datos[2]["nombre"]="Lorena";
$datos[2]["altura"]=175;

var_dump($datos[2]);

array_push($datos, ["nombre"=>"Luis","peso"=>"90"]);
array_push($datos, ["nombre"=>"Óscar","edad"=>"23"]);

var_dump($datos);