<?php

$c = 0;

$c = 40; // Lo metemos a mano
echo "<div>Número introducido: {$c}</div>";

do{
    echo "<div>{$c}</div>";
    $c-=2;
}while ($c>10);
