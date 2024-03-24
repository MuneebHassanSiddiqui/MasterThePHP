<?php
echo "<h1>CHECKDATE() & DATE_DIFF() FUNCTIONS</h1>";
echo "<ul><li><h2>CHECKDATE FUNCTION</h2></li></ul>";
echo "THIS IS VALID DATE => " .  checkdate(2, 29, 2004) . "<br>";
echo "THIS IS NOT VALID DATE => 0 " .  checkdate(2, 29, 2002) . "<br>";

echo "<ul><li><h2>DATE_DIFF FUNCTION</h2></li></ul>";
$date = date_create("12/08/2001");
$date1 = date_create("3/29/2001");

$diff = date_diff($date, $date1);

// echo $diff->days . "days";
echo  "Days difference = > " . $diff->format("%r%a days") . "<br>";

echo "Month difference = > " . $diff->format("%r%m MONTHS") . "<br>";
echo "<pre>";
print_r($diff);
echo "</pre>";
