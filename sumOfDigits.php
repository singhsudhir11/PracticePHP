<?php
function sumOfDigits($num)
{
    if (is_string($num) && ctype_digit($num)) {
        $num = (int)$num;
    }
    if (!is_int($num)) {
        echo "Invalid input";
    }
    $sum = 0;
    while ($num != 0) {
        //Way1
            $temp = $num % 10;
            $sum += $temp;
            $num /= 10;
        // shorthand
        // return $num % 10 + sumOfDigits((int)($num / 10));
    }
    //way1
    return $sum;
}


$num = 5432;
echo sumOfDigits($num);
