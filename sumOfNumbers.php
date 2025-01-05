<?php

function sumOfNumbers($num){
    if (is_string($num) && (ctype_digit($num))) {
        $num = (int)$num;
    }

    if (!is_int($num)||$num <=0) {
        return "Invalid Input";
    }

    $sum = 0;
    for ($i = $num; $i >= 1; $i--) {
        $sum += $i;
    }
    echo "Sum of Digits : " . $sum;
}

sumOfNumbers(3);