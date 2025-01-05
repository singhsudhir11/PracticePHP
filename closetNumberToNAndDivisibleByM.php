<?php

function findClosestDivisible($num, $m)
{
    if ((is_string($num) && ctype_digit($num)) && (is_string($m) && ctype_digit($m))) {
        $num = (int)$num;
        $m = (int)$m;
    }

    if (!is_int($num) || !is_int($m) || $m == 0 || $num == 0) {
        return "Invalid Input";
    }

    $lower = (int)($num / $m) * $m;
    $upper = ($num >= 0) ? $lower + $m : $lower - $m;

    if (abs($num - $lower) < abs($num - $upper)) {
        echo $lower;
    } else if (abs($num - $lower) > abs($num - $upper)) {
        echo $upper;
    } else {
        echo (abs($lower) > abs($upper)) ? $lower : $upper;
    }
}

echo findClosestDivisible(13, 5);