<?php

function multiplicationTable($num)
{
    if (is_string($num) && (ctype_digit($num))) {
        $num = (int)$num;
    }

    if (!is_int($num)) {
        return "Invalid Input";
    }
    for ($i = 1; $i <= 10; $i++) {
        echo "$num * $i = " . $num * $i . "<br>";
    }
}

echo multiplicationTable(9);
