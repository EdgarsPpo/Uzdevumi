<?php

function CheckOddEven($a)
{
    if ($a % 2 == 0) {
        echo "Even";
    } else {
        echo "Odd";
    }
}

echo CheckOddEven(8) ."\n";
echo CheckOddEven(7) ."\n";
echo "Bye"."\n";