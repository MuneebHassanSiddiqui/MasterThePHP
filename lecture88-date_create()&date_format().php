<?php
echo "<h1>DATE_CREATE & DATE_FORMAT FUNCTION</h1>";

$date = date_create("2030-2-29", timezone_open("Asia/Karachi"));
echo "DAY IS =>" . date_format($date, "l") . "<br>";
echo "DATE & TIME =>" . date_format($date, "d/m/Y h:i:sa") . "<br>";
