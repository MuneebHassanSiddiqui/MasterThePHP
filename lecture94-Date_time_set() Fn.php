<?php


echo "<ul><li><h1>Date_time_set() Function</h1></li></ul>";

$date =  date_create("12-06-2005");

date_time_set($date, 12, 20, 50, 0);

echo date_format($date, "d-m-Y H:i:s");
