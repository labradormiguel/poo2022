<?php

function elementosRepetidos($array, $devolverTodos = false) {
    $repeated = [];

    foreach ($array as $value) {
        $inArray = false;

        foreach ($repeated as $i => $rItem) {
            if ($rItem["value"] === $value) {
                $inArray = true;
                ++$repeated[$i]['count'];
            }
        }

        if (false === $inArray) {
            $i = count($repeated);
            $repeated[$i] = array();
            $repeated[$i]["value"] = $value;
            $repeated[$i]["count"] = 1;
        }
    }

    if (!$devolverTodos) {
        foreach ($repeated as $i => $rItem) {
            if ($rItem["count"] === 1) {
                unset($repeated[$i]);
            }
        }
    }

    sort($repeated);

    return $repeated;
}


var_dump(elementosRepetidos([1,1,3,4,6,7,9,3], $devolverTodos=true));
