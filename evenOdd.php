<?php
function evenOdd($num)
{
    if (is_string($num) && ctype_digit($num)) {
        $num = (int)$num;
    }

    if (!is_int($num)) {
        return "Invalid Input";
    }

    if ($num % 2 === 0) {
        echo "True\n";
    } else {
        echo "False\n";
    }
}

echo evenOdd("10");
