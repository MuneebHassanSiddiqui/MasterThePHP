<?php


#ARRAY_SHIFT function
$cars = ["BMW", "MARCADISE", "LAMBORGANI", "TESLA"]; //INDEXED ARRAY

array_shift($cars); #remove first entry of your array

echo "<pre>";
print_r($cars);
echo "<pre>";


$emp = [ //MULTIDIMENSIONAL ARRAY
    ["id" => 1, "name" => "MUNEEB HASSAN", "designation" => "MANAGER", "salary" => 5000000],
    ["id" => 2, "name" =>  "MALAIKAH MUNEEB", "designation" => "v.MANAGER", "salary" => 200000],
    ["id" => 3, "name" => "MARIA HASSAN", "designation" => "ASSISTANT", "salary" => 250000],
    ["id" => 4, "name" => "AYSHA", "designation" => "COMPUTER OPERATOR", "salary" => 400000]
];

array_shift($emp); #remove first entry of your array

echo "<pre>";
print_r($emp);
echo "<pre>";


#******************************************************************************

#ARRAY_UNSHIFT() FUNCTION
$cars1 = ["BMW", "MARCADISE", "LAMBORGANI", "TESLA"]; //INDEXED ARRAY

array_unshift($cars1, "MEHRAN", "VITZ", "CITY"); #ADD first entry of your array

echo "<pre>";
print_r($cars1);
echo "<pre>";


$emp1 = [ //MULTIDIMENSIONAL ARRAY
    ["id" => 1, "name" => "MUNEEB HASSAN", "designation" => "MANAGER", "salary" => 5000000],
    ["id" => 2, "name" =>  "MALAIKAH MUNEEB", "designation" => "v.MANAGER", "salary" => 200000],
    ["id" => 3, "name" => "MARIA HASSAN", "designation" => "ASSISTANT", "salary" => 250000],
    ["id" => 4, "name" => "AYSHA", "designation" => "COMPUTER OPERATOR", "salary" => 400000]
];

array_unshift($emp1, ["id" => 5, "name" => "MUTEEB", "designation" => "MANAGER", "salary" => 50000]); #remove first entry of your array

echo "<pre>";
print_r($emp1);
echo "<pre>";
