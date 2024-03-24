<?php


echo "<h1>ARRAY MAP FUNCTION</h1>";
function mixTheValue($n)
{
    return "THIS LUXURY $n";
}

echo "<ul><li><h2> 1) ARRAY MAP WITH INDEX ARRAY</h2></li></ul>";
$cars = ['FORD', 'BMW', 'LAMBORGANI', 'FORTUNER', 'JUKE', 'CIVIC', 'CITY', 'TESLA', 'PROTON', 'CAROLLA', 'MEHRAN', 'VITZ'];


$newCar1 = array_map('mixTheValue', $cars);
echo '<table border= "2px">';
foreach ($newCar1 as $value) {
    echo '<tr>';
    echo "<td>"  . $value . "</td>";
    echo '</tr>';
}
echo '</table>';

function squre($n, $m)
{
    return [$n => $m];
}
echo "<ul><li><h2> 2) ARRAY MAP WITH INDEX ARRAY</h2></li></ul>";
$num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$name = ['MALAIKAH', 'MUNIB', 'HASSAN', 'MARIA', 'LAMIA', 'AMIN', 'FATIMA', 'ALI', 'ABDULLAH', 'KASIF'];

$newNum = array_map(null, $num, $name); //"squre";Use this function first

echo '<table border= "2px">';
echo '<th>KEYS</th>
      <th>VALUE</th>';
foreach ($newNum as $keys => $name1) {
    foreach ($name1 as $key => $value1) {
        echo '<tr>';
        echo "<td>$keys</td>";
        echo "<td>" . $value1 . "</td>";
    }
}
echo '</tr>';
echo '</table>';
//  echo '<pre>';
// print_r($newNum);
//  echo '</pre>'; 
echo "<ul><li><h2> 2) ARRAY MAP WITH ASSOCIATED ARRAY</h2></li></ul>";

$a = ['7590' => 'INTEL', '1245' => 'DOS', 'H4543' => 'LINUX', 'STEVE' => 'mcOS', 'E7470' => 'DELL', 'G4 480' => 'HP', 'POWER 3' => 'ASUS'];


function lower($n)
{
    return strtolower($n);
}
$newA = array_map("lower", $a);

echo '<table border= "2px">';
echo '<th>KEYS</th>
      <th>VALUE</th>';
foreach ($newA as $key1 => $value2) {
    echo '<tr>';
    echo "<td>$key</td>";
    echo "<td>" . $value2 . "</td>";
}
echo '</tr>';
echo '</table>'; 

// echo '<pre>';
// print_r($newA);
// echo '</pre>';
