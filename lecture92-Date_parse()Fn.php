<?php

echo "<h1>Date_parse()Fn</h1>";
echo "<ul><li><h2>Date_parse() Function</h2></li></ul>";

echo "<pre>";
print_r(date_parse("03-12-2006 12:00:12.5pm"));
echo "</pre>";
$date_parse = date_parse("07-02-2006 08:54:45.5pm");
echo "DAY OF THE MONTH  => " . $date_parse["day"] . "<br>";
echo "YEAR  => " . $date_parse["year"] . "<br>";
echo " MONTH  => " . $date_parse["month"] . "<br>";


echo "<ul><li><h2>Date_parse_from_format() Function</h2></li></ul>";
echo "<pre>";
print_r(date_parse_from_format('d.n.Y', "03.12.1994"));
echo "</pre>";
$date_parse_from_parse = date_parse_from_format("d-m-Y H:i:sa", "07-02-2006 08:54:45.5pm");
// echo "<pre>";
// print_r($date_parse_from_parse);
// echo "</pre>";
echo "DAY OF THE MONTH  => " . $date_parse_from_parse["day"] . "<br>";
echo "YEAR  => " . $date_parse_from_parse["year"] . "<br>";
echo " MONTH  => " . $date_parse_from_parse["month"] . "<br>";
