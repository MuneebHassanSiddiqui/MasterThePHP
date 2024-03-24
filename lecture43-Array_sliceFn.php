<?php

echo "<h1>ARRAY SLICE</h1>";
#indexed array
$color = ['red', 'yellow', 'green', 'blue', 'black', 'orange', 'purple', 'white', 'skyblue'];

$newArray = array_slice($color, -2, 1, true); //native values 

echo "<pre>";
print_r($newArray);
echo "</pre>";

#asscoited array
$cars1 = [012 => "MEHRAN", "MEHRAN" => "CAROLLA", 0 => 045];

$newArray1 = array_slice($cars1, 0, 3, true);


echo "<pre>";
print_r($newArray1);
echo "</pre>";



#MULTIDIMENSIONAL ASSOCIATIVE ARRAY 
$st = [
    "MUNEEB" => ["physics" => 90, "Math" => 86, "English" => 57, "Islamiat" => 89, "OOP" => 96],
    "MALAIKAH" => ["physics" => 90, "Math" => 86, "English" => 64, "Islamiat" => 89, "OOP" => 96],
    "MARIA" => ["physics" => 90, "Math" => 86, "English" => 56, "Islamiat" => 89, "OOP" => 46],
    "HASSAN" => ["physics" => 70, "Math" => 36, "English" => 37, "Islamiat" => 89, "OOP" => 46]
];


$newArray2 = array_slice($st, 0, 3);


echo "<pre>";
print_r($newArray2);
echo "</pre>";
