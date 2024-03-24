<?php

echo "<h1>IN_ARRAY & ARRAY_SEARCH Fn</h1>";
#indexed Array 
$cars = ["MEHRAN", 2306, "CULTUS", "Vitz", "PROTON"];
// echo in_array("MEHRAN", $cars);
echo "<h3>IN_ARRAY FUNCTION WITH INDEX ARRAY</h3>";
if (in_array("MEHRAN", $cars)) {
    echo "FIND SUCCESSFULLY";
} else {
    echo "CAN,T FIND";
}

#Accoiate Array with in_array() function
echo "<h3>IN_ARRAY FUNCTION WITH INDEX ARRAY</h3>";
$food = array(
    "a" => "apple",
    "b" => "ball",
    "c" => "cat",
    "d" => "dog",
    "e" => "elefant"
);

echo in_array("apple1", $food) ? "FIND SUCCESSFULLY" : "CANT FIND";

echo "<h3>ARRAY _SEARCH FUNCTION WITH Accociate Array</h3>";

echo array_search("dog", $food) ? "Array_Search_successfully" : "CANt_FIND";
