<?php

$numero = $_POST["numero"];

if (($numero % 2) == 0) {
    echo "Es par.";
} else {
    echo "Es impar.";
}
