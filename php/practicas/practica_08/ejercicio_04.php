<?php

$n = 8;
$c = 0;

for ($i = 0; $i < $n; $i++) {
    if($i%2!=0){
        $c = $c + $i;
    }
}

echo $c;
