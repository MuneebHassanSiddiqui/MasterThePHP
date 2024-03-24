<?php


echo "<h1>ARRAY REDUCE FUNCTION</h1>"; //this function help us to concrate each values in or array with the intail values
function  string($carry, $item)
{
    return $carry . "-" . $item . "<br>";
}
$random = ['cars', 'bike', 'motorcycle', 'house'];
$newRandom = array_reduce($random, 'string', 20);
//SYNTAX
// GivenNewArray = array_reduce(VariableName,Function,IntialValue);
echo "<ul><li><h2>ARRAY REDUCE FUNCTION WITH STRING</h2></li></ul>";
echo '<pre>';
print_r($newRandom);
echo '</pre>';

$num = [1, 2, 3, 4, 5];

$newNum = array_reduce($num, function ($n, $m) {
    return $n *= $m; //you can use any assignment oparator & arthmatics operator
}, 10);
echo "<ul><li><h2>ARRAY REDUCE FUNCTION WITH INTEGERS</h2></li></ul>";
echo '<pre>';
print_r($newNum);
echo '</pre>';//this function help us to collect all value in the array and return only single value string format
