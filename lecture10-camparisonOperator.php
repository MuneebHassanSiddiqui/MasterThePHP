<?php
echo "<h1>PHP COMPARISION OPERATOR</h1>";
# *******************equal to******************
$a = 10;
$b = "10";
echo $a == $b . "<br>";
#*****************triple equal to************* 
echo $a === $b . "<br>";
#*****************Not Equal to**************** 
$r = 20;
$s = 40;
echo $s != $r . "<br>";
#****************Not Equal to**************** 
$r = 20;
$s = 40;
echo $s <> $r;
#*******NOT EQUAL OR NOT EQUAL DATATYPE******
$c = 30;
$f  = 20;
echo $c !== $f;
#*************GREATER THAN*******************
echo $c > $f;
#**************LESS THAN*********************
echo $c < $f;
#***********SPACESHIP OPERATOR***************
$p = 10;
$f = 20;
echo $f <=> $p;
