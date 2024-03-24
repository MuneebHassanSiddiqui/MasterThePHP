<?php

echo "<h1>Date_time_set() Function</h1>";


echo "<ul><li><h2>Date_default_timezone_get() Function</h2></li></ul>";
echo date_default_timezone_get();

echo "<ul><li><h2>Date_default_timezone_set() Function</h2></li></ul>";
date_default_timezone_set("Asia/karachi");
echo date_default_timezone_get();

echo "<ul><li><h2>timezone_open() Function</h2></li></ul>";
$tz = timezone_open("Europe/paris");
echo  timezone_name_get($tz);

echo "<ul><li><h2>timezone_location_get() Function</h2></li></ul>";

$loc = timezone_location_get($tz);
echo "<pre>";
print_r($loc);
echo "</pre>";

foreach ($loc as $key => $val) {
    echo $key . " ==> " . $val . "<br>";
}
echo "<ul><li><h2>timezone_identifiers_list() Function</h2></li></ul>";

echo "<pre>";
print_r(timezone_identifiers_list(16));
echo "</pre>";
