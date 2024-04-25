<?php

//Exercise 1
$items = ["pudele", "soma", "makaroni"];
echo count($items)."\n";

//Exercise 2
$person = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];

var_dump($person["name"]);
var_dump($person["surname"]);
var_dump($person["age"]);

//Exercise 3
$persons = new stdClass();
$persons->name = "John";
$persons->surname = "Doe";
$persons->age = 50;

var_dump($persons->name);
var_dump($persons->surname);
var_dump($persons->age);

//Exercise 4
$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

echo "{$items[0][1]['name']} {$items[0][1]['surname']} {$items[0][1]['age']}";

//Exercise 5
$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];


echo $items[0][0]['name'] . ' & ' . $items[0][1]['name'] . " Doe's";