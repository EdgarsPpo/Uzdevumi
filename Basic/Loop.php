<?php

//Exercise 1
/*$lietotajs = [
    "name" => "Janis",
    "surname" => "Valodze",
    "age" => 18,

];

foreach($lietotajs as $dati) {
    echo $dati."\n";
}*/

//Exercise 2
/*for ($x = 0; $x <= 5; $x++) {
    echo $x."\n";
}*/

//Exercise 3
/*$x = 1;
while ($x < 10) {
    echo "CODELEX"."\n";
    $x++;
}*/

//Exercise 4
/*$cipari = 20;
for ($i = 0; $i <= $cipari; $i++) {
    if($i % 3 == 0 )
    echo $i."\n";
}*/

//Exercise 5
$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50,
            "Birthday" => "September"
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41,
            "Birthday" => "December"
        ]
    ]
];

foreach($items as list ($value, $b)) {
    echo(implode(", ",$value))."\n";
    echo(implode(", ",$b))."\n";
}