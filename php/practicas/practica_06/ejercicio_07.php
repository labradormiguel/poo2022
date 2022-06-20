<?php

$a = rand(1, 200);
$b = rand(1, 200);
$c = rand(1, 200);

echo "<p>Los números son el " . $a . ", el " . $b . " y el " . $c . "</p>";

if ($a > $b) {
    if ($a > $c) {
        echo "El mayor es el " . $a;
    } else {
        echo "El mayor es el " . $c;
    }
} elseif ($b > $a) {
    if ($b > $c) {
        echo "El mayor es el " . $b;
    } else {
        echo "El mayor es el " . $c;
    }
}