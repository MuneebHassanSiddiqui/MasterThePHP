<?php
echo "<h1>ARRAY SPLICE</h1>";

#deleting the values in array
echo  "<ul><li>
<h2>ARRAY VALUES DELETE BY ARRAY SPLICE</h2></li></ul>";
$color = ['red', 'orange', 'green', 'blue', 'purple'];

array_splice($color, 1, -2);


echo "<pre>";
print_r($color);
echo "</pre>";

echo "<ul><li>
<h2>ARRAY VALUES DELETE & INSERT NEW ARRAY VALUES </h2></li></ul>";
$cars = ['BMW', 'MARCADISE', 'TESLA', 'CAROLLA'];

$fruits = ['apple', 'orange'];

// array_splice($cars,1,count($cars), $fruits);
// array_splice($cars, 1, 0, $fruits);
array_splice($cars, count($cars), 0, $fruits);//fruits values shift to the last index

echo "<pre>";
print_r($cars);
echo "</pre>";
