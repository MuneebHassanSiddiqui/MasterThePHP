<?php
echo "<h1>String-Compare() Function</h1>";
echo "<ul><li><h2> 1)Strcmp() Function</h2></li></ul>";
$a = "MUNEEBHASSAN";
$b = "MUNEEBHASSAN ";
echo (strcmp($a, $b) == 0) ? "YES YOUR PROGRAM RIGHT.......this is case-sensitive" : "NO YOU ARE WRONG.......this is case-sensitive";

echo "<ul><li><h2> 2)Strncmp() Function</h2></li></ul>";
$c = "MUNEEB HASSAN";
$d = "MUNEE HASSAN";
echo (strncmp($c, $d, 5) == 0) ? "YES YOUR PROGRAM RIGHT.......this is case-sensitive" : "NO YOU ARE WRONG";

echo "<ul><li><h2> 3)Strcasecmp() Function</h2></li></ul>";
$z = "MUNEEB HASSAN";
$x = "MUNEEb HASSAN";
echo (strcasecmp($z, $x) == 0) ? "YES YOUR PROGRAM RIGHT.......this is case-insensitive" : "NO YOU ARE WRONG";

echo "<ul><li><h2> 4)Strncasecmp() Function</h2></li></ul>";
$f = "MUNEEB HASSAN";
$g = "MUNEEb HASSAN3483938";
echo (strncasecmp($f, $g, 10) == 0) ? "YES YOUR PROGRAM RIGHT.......this is case-insensitive" : "NO YOU ARE WRONG";

echo "<ul><li><h2> 5)Strnatcmp() Function</h2></li></ul>";
$k = "100MUNEEB HASSAN";
$v = "20MUNEEB Hassan";
echo (strnatcmp($k, $v) == 1) ? "YES YOUR PROGRAM RIGHT.......this is case-sensitive" : "NO YOU ARE WRONG";

echo "<ul><li><h2> 6)Strnatcasecmp() Function</h2></li></ul>";

echo strnatcasecmp("hello world!", "HELlo world!"); //this are equal
echo strnatcasecmp("hello world!!!!", "HELlo world!"); //string2 is less than string1
echo strnatcasecmp("hello world!!!!", "HELlo world! hello world"); //string1 is less than string2

echo "<ul><li><h2> 7)Substr_compare() Function</h2></li></ul>";
echo substr_compare("Hello worlD!", "d!", -2, 2, true);

echo "<ul><li><h2> 8)Similar_text() Function</h2></li></ul>";
similar_text("Hello worlD munib !", "hello munib woD!", $percent);

echo "Percentage : " . $percent . "..........................this is case-sensitive";
