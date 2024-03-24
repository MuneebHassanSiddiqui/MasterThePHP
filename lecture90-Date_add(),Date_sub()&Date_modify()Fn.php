<?php

echo '<h1>Date_add(),Date_sub()&Date_modify() Functions</h1>';

echo "<ul><li><h2>Date_add() Function</h2></li></ul>";
$date = date_create("2015/07/29");
date_add($date, date_interval_create_from_date_string("20 days"));
echo "Add 20 day in your given date = > " . date_format($date, "d/m/Y") . "<br>";


echo "<ul><li><h2>Date_sub() Function</h2></li></ul>";
$dates = date_create("2015/07/29");
date_sub($dates, date_interval_create_from_date_string("10 days"));
echo "sub 10 day in your given date = > " . date_format($dates, "d/m/Y") . "<br>";

echo "<ul><li><h2>Date_modify() Function</h2></li></ul>";
$date1 = date_create("2015/08/09");
date_modify($date1, "20 days");
echo "Your date is modifed= > " . date_format($date1, "d/m/Y") . "<br>";
  