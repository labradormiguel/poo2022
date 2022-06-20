<?php

$n = range(1, 100);
shuffle($n);
$a = array_rand($n, 10);

var_dump($a);

for ($i = 0; $i < count($a); $i++) {
    echo "$a[$i]<br/>";
}

echo "<hr/>";

foreach ($a as $v) {
    echo "$v<br/>";
}