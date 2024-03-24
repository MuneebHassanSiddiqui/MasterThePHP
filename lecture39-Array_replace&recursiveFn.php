<?php

echo "<h1>Array_replace&recursiveFn</h1>";

// INDEXED ARRAY 

$cars = ["CAROLLA", "VITZ", 0 => "MEHRAN", "CITY"];

$models = ["TESLA", "BMW"];

$newArray = array_replace($cars, $models);

echo "<pre>";
print_r($newArray);
echo "</pre>";




$fruits = ['orange', 'banana', 'apple', 'grapes'];

$veggie = ['carrot',  'pea'];

$color = ['red', 'purple', 'green'];

$newArray1 = array_replace($fruits, $veggie, $color);

echo "<pre>";
print_r($newArray1);
echo "</pre>";


#ASSOCIATIVE ARRAY

$cars = ['b' =>"CAROLLA", "VITZ", 'a' => "MEHRAN", "CITY"];

$models = ['a' => "TESLA", 'b' => "BMW"];

$newArray = array_replace($cars, $models);

echo "<pre>";
print_r($newArray);
echo "</pre>";


#MULTIDIMENSIONAL ARRAY
$array1 = [
    [1, "MUNEEB HASSAN", "MANAGER", 5000000],
    [2, "MALAIKAH MUNEEB", "v.MANAGER", 200000]

];
$array2 = [
    [3, "MARIA HASSAN", "ASSISTANT", 250000],
    [4, "AYSHA", "ASSISTANT"]
];

$newArray3 = array_replace_recursive($array1, $array2);

echo "<pre>";
print_r($newArray3);
echo "</pre>";


$color = array("a" => array("red"), "b" => array("greeen", "pink"));

$color2 = array("a"=> array("yellow"),"b"=> array("black","purple") );   


$newArray4 = array_replace_recursive($color, $color2);

echo "<pre>";
print_r($newArray4);
echo "</pre>";
