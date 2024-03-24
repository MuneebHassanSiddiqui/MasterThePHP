<?php

echo "<ul><li><h1>Array Range() Function</h1></li></ul>";

$newNum = range(1, 100, 10);
echo "<pre>";
print_r($newNum);
echo "</pre>";

$newAlp = range("a", "z", 2);
echo "<pre>";
print_r($newAlp);
echo "</pre>";

$newAlp1 = array_flip(range("z", "a"));
echo "<pre>";
print_r($newAlp1);
echo "</pre>";

echo "<table border=1px; cellspacing = 0px; cellpadding=10px; >";
echo "<tr>";
foreach (range("A", "Z") as $i) {
    echo "<td>$i</td>";
}
echo "</tr>";
echo "</table>";
