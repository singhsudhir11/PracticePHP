<?php
function checkArithmeticProgression($array, $size)
{
    if (!is_array($array) || $size == 0) {
        return false;
    }

    if ($size <= 1) {
        return true;
    }

    sort($array);
    $commonDifference  = $array[1] - $array[0];

    for ($i = 2; $i < $size; $i++) {
        if ($array[$i] - $array[$i - 1] != $commonDifference) {
            return false;
        }
    }
    return true;
}
$array = array(20, 15, 5, 0, 10);
$size = count($array);
echo checkArithmeticProgression($array, $size) ? "True" : "False";
