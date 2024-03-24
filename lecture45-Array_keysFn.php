<?php
echo "<h1>ARRAY KEYS</h1>";

$count = ["MUNEEB" => 1, "MUNE" => 2, "MUNEE" => 3, "MUEEB" => 4, 5, 6, 7, 8, 9, 10];

#array_key
echo "<ul><li>
<h2>array_key Function</h2></li></ul>";
$newCount = array_keys($count); //give u all keys
echo "<pre>";
print_r($newCount);
echo "</pre>";



$color = ['red', 'blue', 'green', 'white', 'black', 'orange'];
#array_key_last
echo "<ul><li>
<h2>array_key_last Function</h2></li></ul>";
$newColor = array_key_last($color); //give u last key of your array
echo "<pre>";
print_r($newColor);
echo "</pre>";

$cars = ['02394' => 'marcadise', 'bmw', 'vitz', 'swift', 'carolla', 'yamaha'];
#array_key_first
echo "<ul><li>
<h2>array_key_first Function</h2></li></ul>";
$newCars = array_key_first($cars); //give u first key of your array
echo "<pre>";
print_r($newCars);
echo "</pre>";



$name = [90 =>'MUNEEB HASSAN',2 => 'MALAIKAH MUNEEB', 9 =>'AYSHA HASSAN', 0 =>'MARIA HASSAN', 'YOUSUF NAVEED', 'ALI'];
#array_key_exist
echo "<ul><li>
<h2>array_key_exist Function</h2></li></ul>";
// $newName = ; //this is used for searching the key 
// echo "<pre>";
// print_r($newName);
// echo "</pre>";

$calc = (key_exists(90,$name)? "KEY EXISTS" : "KEY NOT EXISTS");

echo $calc;