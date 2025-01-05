<?php

function diceProblem($num)
{
    if (is_string($num) && (ctype_digit($num))) {
        $num = (int)$num;
    }

    if (!is_int($num) || $num < 1 || $num > 6) {
        return "Invalid Input";
    }

    $opposites = [
        1 => 6,
        2 => 5,
        3 => 4,
        4 => 3,
        5 => 2,
        6 => 1
    ];
    return "Opposite of $num is : ". $opposites[$num];
}

echo diceProblem(4);
