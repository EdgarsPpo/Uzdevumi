<?php

//Exercise 1
$a = 10;
$b = "10";

if ($a == $b) {
    echo "Vienads"."\n";
}else{
    echo "Nesakrit"."\n";
}

//Exercise 2
$c = 50;

if ($c >= 1 && $c <= 100) {
    echo "Ir"."\n";
}else{
    echo "Nebus"."\n";
}

//Exercise 3
$sveiciens = "Hello";

if ($sveiciens == "Hello"){
    echo "World"."\n";
}else{
    echo "Nesakrit"."\n";
}

//Exercise 4
$pirmais = 10;
$otrais = 20;

if($pirmais >  $otrais || $pirmais < $otrais || $pirmais == $otrais){
    echo "Bingo"."\n";
}

//Exercise 5
$cipars = 50;
$y = 1;
$z = 100;

if ($cipars >= $y && $cipars <= $z) {
    echo "correct"."\n";
}else{
    echo "Nebus"."\n";
}

//Exercise 6
$plateNumber = "GBZ3121";

switch ($plateNumber) {
    case "GBZ3121":
        echo "Ta ir tava masina!"."\n";
        break;
    default:
        echo "Tev nav masinas."."\n";
}

//Exercise 7
$number = 10;

switch ($number) {
    case 10:
        echo "low"."\n";
        break;
    case 55:
        echo "medium"."\n";
        break;
    case 190:
        echo "high"."\n";
        break;
    default:
        echo "Nav numura"."\n";
}