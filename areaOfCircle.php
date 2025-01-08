<?php

function areaOfCircle($r)
{
    $pi = M_PI;
    if (!is_numeric($r) || $r <= 0) {
        return "Invalid Input: Radius must be a positive number greater than 0.";
    }

    return $pi * $r * $r;
}
$r = 2;
echo areaOfCircle($r);
