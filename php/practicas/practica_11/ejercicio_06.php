<?php

function ordenar($dir = ".") {
    $directorio = array_diff(scandir($dir), array(".", ".."));
    sort($directorio);
    return $directorio;
}

var_dump(ordenar());
