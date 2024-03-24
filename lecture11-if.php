
<?php

echo"<h1>PHP IF CONDITION</h1>";

#TRUE STATEMENT
$a = 100;

if ($a < 101) {
    echo "101 is greater . <br>";
}


#FALSE STATEMENT
$x = 10;
if ($a > 110) {
    echo "$a : is smaller";
}

#SECOND METHOD OF IF ELSE
#TRUE STATEMENT
$a = 100;

if ($a < 101) :
    echo "101 is greater. <br>";
endif;


$a = 100;
$b = 100;

if ($a == $b) :
    echo "BOTH ARE EQUAL . <br>";
endif;
