<?php
echo"<h1>SWITCH CASE</h1>";
#Today is which day program
$weekday = 2;
echo"<ul><li><h2>TODAY IS WHICH DAY PROGRAM</h2></li></ul>";
switch ($weekday) {
    case 1:
        echo ("TODAY IS MONDAY"."<br>");
        break;
    case 2:
        echo ("TODAY IS TUESDAY")."<br>";
        break;
    case 3:
        echo ("TODAY IS WEDNESDAY")."<br>";
        break;
    case 4:
        echo ("TODAY IS THURSDAY")."<br>";
        break;
    case 5:
        echo ("TODAY IS FRIDAY")."<br>";
        break;
    case 6:
        echo ("TODAY IS SATURDAY")."<br>";
        break;
    case 7:
        echo ("TODAY IS SUNDAY")."<br>";
        break;

    default:
        echo "PLEASE ENTER VALID WEEKDAY!";
        break;
}


#MARK SHEET
$percentage = 30;

echo"<ul><li><h2>CHECK YOUR DIVISION</h2></li></ul>";


switch ($percentage) {
    case $percentage >= 80 && $percentage <= 100:
        echo ("YOUR PERCENTAGE IS:" . $percentage . "<br>");
        echo ("YOUR IN MERIT");
        break;

    case $percentage >= 60 && $percentage <= 80:
        echo ("YOUR PERCENTAGE IS:" . $percentage . "<br>");
        echo ("YOUR IN FIRST DIVISION");
        break;
    case $percentage >= 45 && $percentage <= 60:
        echo ("YOUR PERCENTAGE IS:" . $percentage . "<br>");
        echo ("YOUR IN SECOND DIVISION");
        break;
    case $percentage >= 33 && $percentage <= 45:
        echo ("YOUR PERCENTAGE IS:" . $percentage . "<br>");
        echo ("YOUR IN THIRD DIVISION");
        break;
    case $percentage <= 33:
        echo ("YOUR PERCENTAGE IS:" . $percentage . "<br>");
        echo ("I AM SORRY YOUR FAIL");
        break;

    default:
        echo "PLEASE ENTER VALID PERCENTAGE";
        break;
}



#AGE PROGRAM


$age = 30;

echo"<ul><li><h2>YOU ARE ELIGIBLE OR NOT</h2></li></ul>";


switch ($percentage) {
    case $age >= 15 && $age <= 25:
        echo ("YOUR ARE ELIGIBLE");
      
        break;

    case $age >= 26 && $age <= 30:
        echo ("YOUR ARE NOT ELIGiBLE <br>");
   
        break;

    default:
        echo "PLEASE ENTER VALID AGE";
        break;
}