<?php

#index array
#**************************ARRAY MERGE*****************************
echo "<h1>ARRAY MERGE</h1>";
$name = ["MUNEEB HASSAN", "MALAIKAH", "AYSHA HASSAN",];

$name1 = ["MARIA HASSAN", "ROHAN HASSAN"];


$name2 = ["ALI", "HAMID", "ROHAIL", "ANAS"];
$newArray = array_merge($name, $name1, $name2); //USING FOR INDEX AND ASSOCIATED ARRAY

echo "<pre>";
print_r($newArray);
echo "</pre>";

#accosiated array
$cars = [012 => "MEHRAN", 032 => "CAROLLA", "VITZ" => 045];

$person = array("MUNIB" => 20, "MALAIKAH" => 19, "AYSHA" => 13);

$merge = array_merge($cars, $person);
// $merge = $cars + $person;// THIS IS WORK ONLY ACCOSIATED ARRAY
echo "<pre>";
print_r($merge);
echo "</pre>";



#**********************ARRAY MERGE RECURSIVE*******************************8
echo "<h1>ARRAY MERGE RECURSIVE</h1>";
$cars1 = [012 => "MEHRAN", "MEHRAN" => "CAROLLA", 0 => 045];

$person1 = array("MUNIB" => 20, "MEHRAN" => 19, "AYSHA" => 13);

$merge1 = array_merge_recursive($cars1, $person1); //Merage all the value but where the same key this fuctions another array for same keys

echo "<pre>";
print_r($merge1);
echo "</pre>";

#mutidimensional array*****
$fruits = ['a' => "orange", 'b' => "banana", 'c' => "grapes"];
$veggie = [
    'b' => ['color' => ['red', 'blue', 'green']],
    'e' => 'pea',
    55,
    68
];
$newArray3 = array_merge_recursive($fruits, $veggie);

echo "<pre>";
print_r($newArray3);
echo "</pre>";


#********************ARRAY COMBINE FUNCTION*******************************

echo "<h1>ARRAY COMBINE</h1>";
$st = ["MUNEEB HASSAN", "MALAIKAH MUNEEB", "AYSHA HASSAN", "MARIA HASSAN", "ROHAN HASSAN"];
$rollno = ["47", "86", "21", "12", "19"];


$newArray5 = array_combine($rollno, $st); //ROLLNO IS A KEY OF $ST //ITS ONLY USED FOR INDEXED ARRAY

echo "<pre>";
print_r($newArray5);
echo "</pre>";
