<?php

echo "<h1>ARRAY : LIST()</h1>";
//***************************************************** */
echo "<ul><li><h2>LIST FUNCTION WITH DIFF VALUE ARRAY</h2></li></ul>";
$bike = [0 => "havey", 1 => "mark3", 2 => "hyabus"];


list($a, $b, $c) = $bike;

echo 'THE VALUE OF A VARIABLE IS : ' . $a . "<br>";
echo 'THE VALUE OF B VARIABLE IS : ' . $b . "<br>";
echo 'THE VALUE OF C VARIABLE IS : ' . $c . "<br>";


//***************************************************** */
echo "<ul><li><h2>LIST FUNCTION WITH ASSOC ARRAY</h2></li></ul>";
$cars = [0 => 'BROKE', 1 => 'TRUCK', 2 => 'CARS', 4 => 'LINUX'];
list($a1[0], $a1[1], $a1[2]) =  $cars;

echo 'THE VALUE OF A VARIABLE IS : ' . $a1[0] . "<br>";
echo 'THE VALUE OF a[1] VARIABLE IS : ' . $a1[1] . "<br>";
echo 'THE VALUE OF a[2] VARIABLE IS : ' . $a1[2] . "<br>";


