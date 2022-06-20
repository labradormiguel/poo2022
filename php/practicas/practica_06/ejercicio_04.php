<?php

$num = mt_rand(1, 10);

$res = $num % 2;

if ($res == 0) {
    echo "El número es par (" .$num .")";
} else {
    echo "El número es impar (" .$num .")";
}