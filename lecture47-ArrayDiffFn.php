<?php

echo "<h1>ARRAY DIFFERENCE FUNCTIONS</h1>";
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");

$a2 = array("a" => "red", "f" => "green", "d" => "purple");
$a3 = array("a" => "red", "b" => "black", "h" => "yellow");

echo "<ul><li>
<h2>1 ) array_diff Function</h2></li></ul>";

$newArray = array_diff($a1, $a2, $a3);

echo "<pre>";
print_r($newArray);
echo "</pre>";



#***************************************************
#array_diff_key
$b1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");

$b2 = array("a" => "red", "f" => "green", "d" => "purple");
// $b3 =array("a"=> "red","b"=> "black","h"=> "yellow");

echo "<ul><li>
<h2> 2 ) array_diff_key Function</h2></li></ul>";

$newArray1 = array_diff_key($b1, $b2);

echo "<pre>";
print_r($newArray1);
echo "</pre>";



#***************************************************
#array_diff_assoc
$c1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");

$c2 = array("a" => "red", "f" => "green", "d" => "purple");
// $b3 =array("a"=> "red","b"=> "black","h"=> "yellow");

echo "<ul><li>
<h2> 3 ) array_diff_assoc Function</h2></li></ul>";

$newArray2 = array_diff_assoc($c1, $c2);
//CHECK BOTH KEY AND VALUES
echo "<pre>";
print_r($newArray2);
echo "</pre>";


#***************************************************
#array_diff_assoc
function compare($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    ($a > $b) ? 1 : -1;
}
function compareValue($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    ($a > $b) ? 1 : -1;
}
$d1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");

$d2 = array("a" => "red", "f" => "green", "d" => "purple");
// $b3 =array("a"=> "red","b"=> "black","h"=> "yellow");

echo "<ul><li>
<h2> 4 ) array_diff_uassoc Function</h2></li></ul>"; //there are 5 different types of user defined function

$newArray3 = array_diff_uassoc($d1, $d2, "compare");
// $newArray3 = array_udiff_assoc($d1, $d2, "compare");#same function
//CHECK BOTH KEY AND VALUES
echo "<pre>";
print_r($newArray3);
echo "</pre>";






#***************************************************
#array user defined function cant be used this time!!!!!!!!
#array_diff_Ukey FUNCTION
$e1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");

$e2 = array("a" => "red", "f" => "green", "d" => "purple");
// $b3 =array("a"=> "red","b"=> "black","h"=> "yellow");

echo "<ul><li>
<h2> 5 ) array_diff_ukey Function</h2></li></ul>"; //there are 5 different types of user defined function

$newArray4 = array_diff_key($e1, $e2);
//CHECK  KEY 
echo "<pre>";

print_r($newArray4);
echo "</pre>";


#***************************************************

#array_udiff_uassoc FUNCTION
$f1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");

$f2 = array("a" => "red", "f" => "green", "d" => "purple");
// $b3 =array("a"=> "red","b"=> "black","h"=> "yellow");

echo "<ul><li>
<h2> 6 ) array_udiff_uassoc Function</h2></li></ul>"; //there are 5 different types of user defined function

// $newArray5 = array_udiff_uassoc($f1, $f2,"compare","compareValue");
$newArray5 = array_diff_assoc($f1, $f2);
//CHECK  KEY AND VALUES
echo "<pre>";
print_r($newArray5);
echo "</pre>";

