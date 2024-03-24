<?php
echo "<h1>Gettime(),localTime()&GetTimeofDate()Fn</h1>";
echo "<ul><li><h2>Gettime() Function</h2></li></ul>";
$olddate = mktime(0, 0, 0, 03, 04, 2001);
$date = getdate($olddate);
echo "MONTH => " . $date['month'] . " - " . $date['year'];
echo "<pre>";
print_r(getdate());
echo "</pre>";

echo "<ul><li style='list-style-type: none; padding: 0; margin: 0;'>
<h2 style='margin: 0;'>GetTimeofDate() Function</h2>
</li></ul>";
echo "<pre>";
print_r(gettimeofday());
echo "</pre>";
echo "<pre>";
print_r(gettimeofday(true)); // - > this is gives you a float value e.g =>1708305950.989
echo "</pre>";

echo "<ul><li><h2>localTime() Function</h2></li></ul>";
$old = mktime(0,0,0,8,29,2005);
echo "<pre>";
print_r(localtime(time()));//->when you are passing false they gives a index array 
echo "</pre>";
echo "<pre>";
print_r(localtime($old,true));//->when you are passing True they gives a Associated array 
echo "</pre>";