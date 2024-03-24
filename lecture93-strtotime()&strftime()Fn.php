<?php

echo "<h1>Strtotime() & Strftime() Function</h1>";
echo "<ul><li><h2>Strtotime() Function</h2></li></ul>";

echo "YESTERDAY DATE = >" . date("d-m-Y", strtotime("yesterday")) . "<br>";
echo "TODAY DATE = >" . date("d-m-Y", strtotime("today")) . "<br>";
echo "NEXTDAY DATE = >" . date("d-m-Y", strtotime("next day")) . "<br>";
echo "1week DATE = >" . date("d-m-Y", strtotime("+1week")) . "<br>";
echo "1month DATE = >" . date("d-m-Y", strtotime("-1month")) . "<br>";
echo "1st Ramzan = >" . date("d-m-Y H:i:s", strtotime("+20days 1hours 20mint 20sec")) . "<br>";
echo "1monday this week DATE = >" . date("d-m-Y H:i:s", strtotime("First day of this month")) . "<br>";


echo "<ul><li><h2>Strtotime() Function</h2></li></ul>";
//echo strftime("%B/%d/%Y %Z"  );//Function 'strftime' is deprecated since PHP 8.1
$date = new DateTime();
echo "date_default_timezone_set(Asia/Karachi)  = >" .  date_default_timezone_set("Asia/Karachi") . "<br>";
echo $date->format("F/d/Y e"); // Example format: February/19/2024 UTC

