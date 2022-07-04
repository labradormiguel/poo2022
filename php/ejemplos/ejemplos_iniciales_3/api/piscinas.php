<?php

$url = "https://datos.madrid.es/egob/catalogo/210227-0-piscinas-publicas.json";

$salida = file_get_contents($url);

$datos = json_decode($salida,true);



