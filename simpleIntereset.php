<?php

function calculateSI($p, $n, $r)
{
    if (!is_numeric($p) || !is_numeric($n) || !is_numeric($r) || $p <= 0 || $n <= 0 || $r <= 0) {
        return "Invalid input";
    }
    return ($p * $n * $r) / 100;
}
echo calculateSI(10000, 5, 5);
