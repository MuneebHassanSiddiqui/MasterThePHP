<?php

$person = array("MUNIB" => 20, "MALAIKAH" => 19, "AYSHA" => 13);


echo $person['AYSHA'] . "<br>";
echo $person['MUNIB'] . "<br>";
echo $person['MALAIKAH'] . "<br>";



$cars = [012 => "MEHRAN", 032 => "CAROLLA", "VITZ" => 045];

#PRINT_R Check index number of each value
echo "<pre>";
print_r($cars);
echo "</pre>";


$pc = [012 => "LINUX", 032 => "mcOS", "UBUNTU" => "HACKED"];


#changing the value of any key
 $pc['UBUNTU'] = 034;


#var_dump Check index number & data type of each value
echo "<pre>";
var_dump($pc);
echo "</pre>";



$age = ["bill" => 25, "steve" => 29, "elon" => 19];


#changing the value of any key
$age ["elon"] = 50;


echo $age['bill']."<br>";
echo $age['steve']."<br>";
echo $age['elon']."<br>";


echo "<pre>";
var_dump($age);
echo "</pre>";