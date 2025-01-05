<?php

function swapNumbers($num1, $num2)
{
    if ((is_string($num1) && ctype_digit($num1)) && (is_string($num2) && ctype_digit($num2))) {
        $num1 = (int)$num1;
        $num2 = (int)$num2;
    }

    if (!is_int($num1) || !is_int($num2)) {
        return "Invalid Input";
    }

    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;

    echo "Num1 : " . $num1 . ", Num2 : " . $num2;
}

swapNumbers(5, 10);
