<?php

$a= 1;
$b = 100;
$randoms= rand($a, $b);

$ievaditais = readline('Izvelies skaitli: ');

if ($ievaditais == $randoms) {
    echo "You guessed it!  What are the odds?!?" ."\n";
} else if ($ievaditais < $randoms) {
    echo "Sorry, you are too low.  I was thinking of $randoms." ."\n";
} else if ($ievaditais > $randoms) {
    echo "Sorry, you are too high.  I was thinking of $randoms." ."\n";
}