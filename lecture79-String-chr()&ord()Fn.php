<?php


echo "<h1>String-CHR() & ORD() FUNCTION</h1>";

echo "<ul><li><h2>CHR() FUNCTION</h2></li></ul>";
$str1 = chr(0101); //this is octal
$str2 = chr(67); //this is decimal
$str3 = chr(0x48); //this is hexaii numbers
// echo $str1 . "<br>" . $str2 . "<br>" . $str3;
$ASCII = ($str1 == "A" && $str2 == "C" && $str3 == "H") ? "YES THIS IS THE FORMAT OF ASCII TABLE" : "PLEASE CHECK THE QUERY ";
echo $ASCII;


echo "<ul><li><h2>ORD() FUNCTION</h2></li></ul>";

$ord1 = ord("m");
$ord2 = ord(1);
$ord3 = ord("@");

echo $ord1 . "<br>"  . $ord2 . "<br>" . $ord3 . "<br>";
