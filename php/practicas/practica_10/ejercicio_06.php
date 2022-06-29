<?php

$n1 = $_POST["numero1"];
$n2 = $_POST["numero2"];
$n3 = $_POST["numero3"];

if ($n1 > $n2) {
    if ($n1 > $n3) {
        echo "El mayor es el {$n1}";
    } else {
        echo "El mayor es el {$n3}";
    }
} elseif ($n2 > $n1) {
    if ($n2 > $n3) {
        echo "El mayor es el {$n2}";
    } else {
        echo "El mayor es el {$n3}";
    }
}
