

<?php

echo "<h1>MATH-TIME() FUNCTION</h1>";

echo "<ul><li><h2>HOURS FUNCTION</h2></li></ul>";
echo "Hour is " . date("H")  . "<br>"; //00 to 23
echo "Hour is " . date("h")  . "<br>"; //01 to 12
echo "Hour is " . date("G")  . "<br>"; //1 to 12
echo "Hour is " . date("g")  . "<br>"; //0 to 23

echo "<ul><li><h2>MINUTES FUNCTION</h2></li></ul>";
echo "Minutes is " . date("i") . "<br>"; //00 to 59

echo "<ul><li><h2>SECONDs FUNCTION</h2></li></ul>";
echo "Seconds is " . date("s") . "<br>"; //00 to 59

echo "<ul><li><h2>MERIDIEM FUNCTION</h2></li></ul>";
echo "Meridiem is " . date("a") . "<br>";
echo "Meridiem is " . date("A") . "<br>";

echo "<ul><li><h2>TIME()FUNCTION</h2></li></ul>";
echo "Time is " . date("h:i:sa e") . "<br>";
//you can change the default value you can use this dunction date_default_timezone_set
echo "date_default_timezone_set(Asia/Karachi)  = >" .  date_default_timezone_set("Asia/Karachi") . "<br>";
echo "Time is " . date("h:i:sa e") . "<br>";
