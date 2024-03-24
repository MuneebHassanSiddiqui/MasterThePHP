<?php

echo "<h1>ARRAY: Sorting Function</h1>";
// this function is use to sort the array values and keys which mean it can arrange the all values by alphabatic form or numerics values in our array 
// 1,4,67,878
// asc :1,4,67,878 //des: 878,67,4,1
// Asc: Start with A and end with Z
// Des:Start with Z and end with A
// reverse order reverse all the array value 
// array revese order 
// ***********functions****************** 
// 1)sort---|USE FOR INDEX ARRAY 
// 2)rsort--|USE FOR INDEX ARRAY 
// 3)asrort-|USE FOR ASSOCIATED ARRAY
// 4)asort--|USE FOR ASSOCIATED ARRAY
// 5)krsort-|USE FOR KEY SORTING
// 6)ksort--|USE FOR KEY SORTING
// 7)natcasesort--|Naturally sorting value
// 8)natsort------|Naturally sorting value
// 9)array_multisort--|Sorting for multiple Value
// 10)array_reverse---|revese all the array Value

// *************************************************/
echo "<ul><li><h2>1.)SORT FUNCTION</h2></li></ul>";
$pc = array("ubuntu", "linux", "window", "mcos");
sort($pc);

echo "<table border='1px solid'>";
echo "<th>KEYS</th><th>SORT</th>";
foreach ($pc as $k => $v) {
    echo "<tr>";
    echo "<td> $k </td>";

    echo "<td> $v </td>";
}
echo "</tr>";
echo "</table>";
//*************************************************/
echo "<ul><li><h2>2.)RSORT FUNCTION</h2></li></ul>";
$n = array(12, 11, 56, 75, 23, 454, 56);
rsort($n);

echo "<table border='1px solid'>";
echo "<th>KEYS</th><th>RSORT</th>"; //starting with Z end with A
foreach ($n as $k => $v) {
    echo "<tr>";
    echo "<td> $k </td>";

    echo "<td> $v </td>";
}
echo "</tr>";
echo "</table>";

//*************************************************/
echo "<ul><li><h2>3.)ASORT FUNCTION</h2></li></ul>";

$age = ["bill" => 25, "steve" => 29, "elon" => 19];

asort($age);

echo "<table border='1px solid'>";
echo "<th>KEYS</th><th>ASORT</th>"; //starting with Z end with A
foreach ($age as $k => $v) {
    echo "<tr>";
    echo "<td> $k </td>";

    echo "<td> $v </td>";
}
echo "</tr>";
echo "</table>";
//**************************************************/
echo "<ul><li><h2>4)ARSORT FUNCTION</h2></li></ul>";

$age1 = ["bill" => 25, "steve" => 29, "elon" => 19, 'munib' => 19, "malaikah" => 18];

$newAge = array_flip($age1);

arsort($newAge);

echo "<table border='1px solid'>";
echo "<th>KEYS</th><th>ARSORT</th>"; //starting with Z end with A
foreach ($newAge as $k => $v) {
    echo "<tr>";
    echo "<td> $k </td>";

    echo "<td> $v </td>";
}
echo "</tr>";
echo "</table>";
//************************************************
echo "<ul><li><h2>5)KSORT FUNCTION</h2></li></ul>";

$subject1 = ["a" => "red", "f" => "green", "d" => "purple"];

ksort($subject1);

echo "<table border='1px solid'>"; //sorting the keys only
echo "<th>KSORT</th><th>VALUES</th>"; //starting with Z end with A
foreach ($subject1 as $k => $v) {
    echo "<tr>";
    echo "<td> $k </td>";

    echo "<td> $v </td>";
}
echo "</tr>";
echo "</table>";
//************************************************* */
echo "<ul><li><h2>6)KRSORT FUNCTION</h2></li></ul>";

$subject2 = ["a" => "math", "f" => "english", "d" => "islamiat", "z" => "oop", "e" => "cms"];

krsort($subject2);

echo "<table border='1px solid'>"; //sorting the keys only//des order
echo "<th>KRSORT</th><th>VALUES</th>"; //starting with Z end with A
foreach ($subject2 as $k => $v) {
    echo "<tr>";
    echo "<td> $k </td>";

    echo "<td> $v </td>";
}
echo "</tr>";
echo "</table>";
//************************************************** 
echo "<ul><li><h2>7)KRSORT FUNCTION</h2></li></ul>";
$array1 = ["img67.png", "img64.png", "img90.png", "img100.png", "Img27.png", "img60.png", "img1.png", "img6.png", "img7.png"];

natsort($array1);
echo "<table border='1px solid'>"; //sorting the keys only//des order
echo "<th>NATSORT</th><th>VALUES</th>"; //starting with Z end with A
foreach ($array1 as $k => $v) {
    echo "<tr>";
    echo "<td> $k </td>";

    echo "<td> $v </td>";
}
echo "</tr>";
echo "</table>";
//*************************************************** 
echo "<ul><li><h2>8)NATCASESORT FUNCTION</h2></li></ul>";
$array2 = ["img67.png", "img64.png", "img90.png", "img100.png", "Img27.png", "img60.png", "img1.png", "img6.png", "img7.png"];

natcasesort($array2);
echo "<table border='1px solid'>"; //sorting the keys only//des order
echo "<th>NATCASESORT</th><th>VALUES</th>"; //starting with Z end with A
foreach ($array2 as $k => $v) {
    echo "<tr>";
    echo "<td> $k </td>";

    echo "<td> $v </td>";
}
echo "</tr>";
echo "</table>";
//*********************************************** */
echo "<ul><li><h2>9)MULTISORT FUNCTION</h2></li></ul>";

$food = ['kabab', 'tikka', 'pulaoo', 'biryanii'];
$veggie = ['salad', 'potato', 'ginger', 'tomatoo'];

array_multisort($food, $veggie);

echo '<pre>';
print_r($food);
echo '</pre>';

echo '<pre>';
print_r($veggie);
echo '</pre>';
echo "<table border='1px solid'>"; //sorting the keys only//des order
echo "<th>KEYS</th><th>MULTISORT</th>"; //starting with Z end with A
echo '<h2>FOODS</h2>';
foreach ($food as $k => $v) {
    echo "<tr>";
    echo "<td> $k </td>";

    echo "<td> $v </td>";
}
echo "</tr>";
echo "</table>";

echo '<h2>VEGGIETABLE</h2>';
echo "<table border='1px solid'>"; //sorting the keys only//des order
echo "<th>KEYS</th><th>MULTISORT</th>"; //starting with Z end with A
foreach ($veggie as $k => $v) {
    echo "<tr>";
    echo "<td> $k </td>";

    echo "<td> $v </td>";
}
echo "</tr>";
echo "</table>";

//***************************************************** 
echo "<ul><li><h2>10)ARRAY REVERSE FUNCTION</h2></li></ul>";

$counting = ['hijet', 'every', 'carolla', 'city', 'vitz', 'mehran', 'juke'];

$newCount = array_reverse($counting);

echo "<table border='1px solid'>"; //sorting the keys only//des order
echo "<th>KEYS</th><th>ARRAY_REVERSE</th>"; //starting with Z end with A
foreach ($newCount as $k => $v) {
    echo "<tr>";
    echo "<td> $k </td>";

    echo "<td> $v </td>";
}
echo "</tr>";
echo "</table>";