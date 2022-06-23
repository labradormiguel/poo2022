<?php

$notas=[4,8,6,5];
$contador = 0;

foreach ($notas as $v) {
    $contador = $contador + $v;
}

echo "<div>La nota media es: " . ($contador / count($notas)) . "</div>";
