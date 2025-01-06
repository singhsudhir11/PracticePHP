<?php

function findFirstOccurrence($haystack, $needle)
{
    return strstr($haystack, $needle) ? strpos($haystack, $needle) : -1;
}

echo findFirstOccurrence("alotofcode","lot");
?>