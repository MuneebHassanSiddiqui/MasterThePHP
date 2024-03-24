<?php

echo "<h1>MATH-DATE() FUNCTION</h1>";

echo "<ul><li><h2>DATE() => DAY FUNCTION</h2></li></ul>";

echo "TODAY IS " . date("dS") . "<br>"; //S = > for styling
echo "TODAY IS " . date("jS") . "<br>"; //S = > for styling

echo "<ul><li><h2>DATE() => MONTH FUNCTION</h2></li></ul>";
echo "CURRENT MONTH IS  " . date("F") . "<br>";
echo "CURRENT MONTH IS  " . date("m") . "<br>";
echo "CURRENT MONTH IS  " . date("M") . "<br>";
echo "CURRENT MONTH IS  " . date("n") . "<br>";

echo "<ul><li><h2>DATE() => YEAR FUNCTION</h2></li></ul>";
echo "CURRENT YEAR IS  " . date("Y") . "<br>";
echo "CURRENT YEAR IS  " . date("y") . "<br>";


echo "<ul><li><h2>DATE() => WEEK FUNCTION</h2></li></ul>";
echo "TODAY IS  " . date("D") . "<br>";
echo "TODAY IS  " . date("l") . "<br>";
echo "TODAY IS  " . date("N") . "<br>";
echo "TODAY IS  " . date("w") . "<br>";
echo "DATE:" . date("y/M/d") . "<br>";
echo (date("L") == 1) ? "THIS YEAR IS LEAP YEAR<br> " : "THIS YEAR IS NOT LEAP YEAR";;
echo "MONTHS DAYS " . date("t") . "<br>";
echo "WEEKS COUNT THIS YEAR  " . date("W") . "<br>";
echo "MONTHS DAYS " . date("z") . "<br>";
