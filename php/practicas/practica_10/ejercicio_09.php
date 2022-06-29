<?php

$nota = $_POST["nota"];

if ($nota <= 2) {
    echo "Muy deficiente.";
} elseif ($nota < 5) {
    echo "Suspenso.";
} elseif ($nota < 6) {
    echo "Suficiente.";
} elseif ($nota < 7) {
    echo "Bien.";
} elseif ($nota < 9) {
    echo "Notable.";
} else {
    echo "Sobresaliente.";
}
