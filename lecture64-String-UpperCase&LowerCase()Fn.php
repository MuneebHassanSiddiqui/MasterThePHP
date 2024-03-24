<?php
echo "<h1>String-LowerCase & UpperCase() Function</h1>";

echo "<ul><li><h2> 1)Str To Lower() Function</h2></li></ul>";
$name = "JOSH JEO HERO";
$newName = strtolower($name);
echo "<ul><li>$newName</ul></li>";

echo "<ul><li><h2> 2)Str To Upper() Function</h2></li></ul>";
$name1 = "MUNEEB HASSAN";
$newName1 = strtoupper($name1);
echo "<ul><li>$newName1</ul></li>";

echo "<ul><li><h2> 3)UCWORDS() Function</h2></li></ul>";
$name1 = "while you are trying to much";
$newName1 = ucwords($name1);
echo "<ul><li>$newName1</ul></li>";

echo "<ul><li><h2> 4)UCFIRST() Function</h2></li></ul>";
$name1 = "every thing is possible";
$newName1 = ucfirst($name1);
echo "<ul><li>$newName1</ul></li>";

echo "<ul><li><h2> 3)LCWORDS() Function</h2></li></ul>";
$name1 = "NOTHING IS IMPOSIBLE";
$newName1 = lcfirst($name1);
echo "<ul><li>$newName1</ul></li>";
