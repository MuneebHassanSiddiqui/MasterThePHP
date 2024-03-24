<?php

echo "<h1>ARRAY COLUMN & CHUNK FUNCTION</h1>";


#array_column
$emp = [
    [
        "id" => 2001,
        "name" => "MUNEEB HASSAN",
        "salary" => 80000000,
    ],
    [
        "id" => 2002,
        "name" => "MALAIKAH MUNEEB",
        "salary" => 1500000,
    ],
    [
        "id" => 2003,
        "name" => "MARIA",
        "salary" => 100000,
    ],
    [
        "id" => 2004,
        "name" => "HASSAN",
        "salary" => 30000,
    ],
    [
        "id" => 2005,
        "name" => "HUSSIAN",
        "salary" => 20000,
    ],
    [
        "id" => 2006,
        "name" => "ALI",
        "salary" => 25000,
    ],
    [
        "id" => 2007,
        "name" => "NADEEEM",
        "salary" => 20000,
    ],
];
echo "<ul><li>
<h2> 1 ) array_column Function</h2></li></ul>";

$newEmp = array_column($emp, "name", "id");


echo "<pre>";
print_r($newEmp);
echo "</pre>";


#array_chunk

#index array 
$pc = ['asus', 'azure', 'dell', 'hp', 'logi-tech', 'macOs'];


#syntax array_chunk(variable name , size of values ,case sensitive);
$newPc = array_chunk($pc, 2, true);

echo "<ul><li>
<h2> 2 ) array_chunk Function</h2></li></ul>";


echo  "<pre>";
print_r($newPc);
echo  "</pre>";

#associated array

$age = ["bill" => 25, "steve" => 29, "elon" => 19, "ali" => 70,  "mandan" => 17];

$newAge = array_chunk($age, 2, true);

echo  "<pre>";
print_r($newAge);
echo  "</pre>";
