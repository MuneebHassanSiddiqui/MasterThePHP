<?php

echo "<h1>ARRAY EXTRACT & COMPACT()</h1>";


echo "<ul><li><h2> 1)ARRAY EXTRACT FUNCTION</h2></li></ul>";

// $a = 'city';
// $b = 'vitz';
$name = ['a' => 'MALAIKAH', 'b' => 'MUNIB', 'c' => 'HASSAN', 'd' => 'REHMAN',];

//************************/
extract($name, EXTR_SKIP);
//EXTR_SKIP=>this function will skip the array values & print the same variable out of the array 
//***********************/
// extract($name, EXTR_OVERWRITE);
// EXTR_OVERWRITE=>this is default value of this function print arrays value only
// //***********************/
// extract($name, EXTR_PREFIX_ALL, 'test');
// echo 'THE VALUE $a is  = ' . $test_a .  "<br>";
// echo 'THE VALUE $b is  = ' . $test_b .  "<br>";
// echo 'THE VALUE $c is  = ' . $test_c .  "<br>";
// echo 'THE VALUE $d is  = ' . $d .  "<br>";
//Undefined variable $d in C:\xampp\htdocs\PHP_COURSE\lecture60-ArrayCompact&Extract.php on line 24 => you must used prifix with all variable 
// extract($name, EXTR_PRIFIX_SAME, 'IO');//this function is removed in php 8 version
// echo 'THE VALUE $a is  = ' . $test_a .  "<br>";
// echo 'THE VALUE $b is  = ' . $test_b .  "<br>";
// echo 'THE VALUE $c is  = ' . $test_c .  "<br>";

echo "<table border = '1px' cellpadding ='10px' cellspacing = '0'>";
echo "<th>VARIABLE</th>";
echo "<th>VALUES</th>";
foreach ($name as $key => $value) {
    echo "<tr>";
    echo "<th>$key</th>";
    echo "<td>$value</td>";
}
echo "</tr>";
echo "</table>";

echo "<ul><li><h2> 2)ARRAY COMPACT FUNCTION</h2></li></ul>";


$name = "MUNIBHASSAN";
$age = "18";
$designation = "CEO";
$salary = 9000000;
$cname = "DOT-CLICK";

$newData = compact("name", "age", "designation", "salary", "cname");
// echo '<pre>';
// print_r($newData);
// echo '</pre>';



echo "<table border = '1px' cellpadding ='10px' cellspacing = '0'>";
echo "<th>KEYS</th>";
echo "<th>VALUES</th>";
foreach ($newData as $key => $value) {
    echo "<tr>";
    echo "<th>$key</th>";
    echo "<td>$value</td>";
}
echo "</tr>";
echo "</table>";
