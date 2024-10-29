<?php

function generatePairs($input)
{
    $numbers = array_map('intvl', explode(' ', $input));
    $pairs = [];
    foreach ($numbers as $i) {
        foreach ($numbers as $j) {
            if ($i != $j) {
                $pairs[] = [$i, $j];
            }
        }
    }
    foreach ($pairs as $pair) {
        echo $pair[0] . ' ' . $pair[1] . PHP_EOL;
    }
}

$input = "1 2 3";
generatePairs($input);
