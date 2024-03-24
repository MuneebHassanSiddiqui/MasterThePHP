<?php

echo "<h1>MATH-RandomNumber() FUNCTION</h1>";

echo "<ul><li><h2>MATH-Rand() FUNCTION</h2></li></ul>";
$rand = rand(100, 2000);
echo $rand;

echo "<ul><li><h2>MATH-Mt_rand() FUNCTION</h2></li></ul>";
$mt_rand = mt_rand(200, 900); //4 much time faster than rand function
echo $mt_rand;

echo "<ul><li><h2>MATH-lcg_value() FUNCTION</h2></li></ul>";

$icg_value = floor(lcg_value()); //this function only give 0 or 1 

$retVal = ($icg_value = 1) ? "ANSWER IS 0" : "ANSWER IS 1";

echo $retVal;
