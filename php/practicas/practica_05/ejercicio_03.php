<?php

//$a = 9;
//$a = 19;
//$a = 29;
//$a = 39;
$a = 190;
$b = ["poco", "algo", "medio", "mucho", "normal"];

if ($a < 10) {
    echo $b[0];
} elseif ($a < 20) {
    echo $b[1];
} elseif ($a < 30) {
    echo $b[2];
} elseif ($a < 40) {
    echo $b[3];
} else {
    echo $b[4];
}