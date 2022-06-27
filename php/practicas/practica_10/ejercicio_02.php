<?php

$numero = $_POST["numero"];

if ($numero < 0) {
    echo "Es negativo.";
} else {
    echo "Es positivo.";
}
