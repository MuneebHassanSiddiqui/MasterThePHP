<?php

echo "<h1>ArrayPush&Pop()</h1>";
// #ARRAY POP()fn
$a = ["MUNEEB", "MALAIKAH", "MARIA"];

array_pop($a);

echo "<pre>";
print_r($a);
echo "<pre>";



#ARRAY PUSH()fn
$cars = ["BMW", "MEHRAN"];

array_push($cars, ["CAROLLA", "VITZ", "SWIFT"]); #array in array 

echo "<pre>";
print_r($cars);
echo "<pre>";


#pop function for multidimensional array
$emp = [
    ["id" => 1, "name" => "MUNEEB HASSAN", "designation" => "MANAGER", "salary" => 5000000],
    ["id" => 2, "name" =>  "MALAIKAH MUNEEB", "designation" => "v.MANAGER", "salary" => 200000],
    ["id" => 3, "name" => "MARIA HASSAN", "designation" => "ASSISTANT", "salary" => 250000],
    ["id" => 4, "name" => "AYSHA", "designation" => "COMPUTER OPERATOR", "salary" => 400000]
];
array_pop($emp);
echo "<pre>";
print_r($emp);
echo "<pre>";



#push function for multidimensional array
$emp1 = [
    ["id" => 1, "name" => "MUNEEB HASSAN", "designation" => "MANAGER", "salary" => 5000000],
    ["id" => 2, "name" =>  "MALAIKAH MUNEEB", "designation" => "v.MANAGER", "salary" => 200000],
    ["id" => 3, "name" => "MARIA HASSAN", "designation" => "ASSISTANT", "salary" => 250000],
    ["id" => 4, "name" => "AYSHA", "designation" => "COMPUTER OPERATOR", "salary" => 400000]

];


array_push($emp1, ["MUNEEB", "MANAGER", 90000]);
echo "<pre>";
print_r($emp1);
echo "<pre>";
