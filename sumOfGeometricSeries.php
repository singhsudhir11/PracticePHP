<?php

function sumOfGeometricSeries($a, $r, $n)
{
    if (!is_numeric($a) || !is_numeric($r) || !is_numeric($n) || $n <= 0 || (int)$n != $n) {
        return "Invalid input. A and R must be numeric and N must be greater than 0";
    }

    $n = (int)$n;

    if ($r == 1) {
        return $a * $n;
    } else {
        return $a * (1 - pow($r, $n)) / (1 - $r);
    }
}
$a = 2;
$r = 3;
$n = 4;
echo "Sum : " . sumOfGeometricSeries($a, $r, $n);
