<?php

$vocales=[
  "a" ,"e","i","o","u"
];

echo "Número de elementos del array: ".count($vocales);
echo "<br/>";
echo "Vocal al azar (F5 para actualizar): " . $vocales[mt_rand(0,4)];
