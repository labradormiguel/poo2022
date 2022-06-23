<?php

$notas=[4,8,6,5];

echo "<h2>bucle for</h2>";

for ($i = 0; $i < count($notas); $i++) {
    echo "<div>$notas[$i]</div>";
}

echo "<h2>bucle foreach</h2>";

foreach ($notas as $v) {
    echo "<div>$v</div>";
}