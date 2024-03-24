<?php
echo "<h1>PHP CONST VARIABLE</h1>";
# SIMPLE VARIABLES 
$x = 500;
echo "$x  <br>";

$x = 90000;
echo "$x <br>";


#CONSTANT VARIABLE
define("num", 1000);
echo num  . "<br>";

define('n', 100);

echo num + n . "<br>";

// #cant use same name constant
// define("num", 1000);
// echo num  . "<br>";
define('name', "MUNIBHASSAN");

echo name;
