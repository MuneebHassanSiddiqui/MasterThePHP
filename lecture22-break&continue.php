<?php

echo"<h1>BREAK & CONTINUE STATEMENT</h1>";
#CONTINUE STATEMENT

echo"<ul><li><h2>CONTINUE STATEMENT</h2></li></ul>";


for ($i = 1; $i < 10; $i++) {
    if ($i == 3) {
        continue;
    }
    echo $i . "<br>";
}

for ($x=0; $x <= 10 ; $x++) { 
    if ($x == 1) {
        echo "No: $x . <br>";
        continue;
}
echo "NUMBERS :".$x ."<br>";
}

#BREAK STATEMENT

echo"<ul><li><h2>BREAK STATEMENT</h2></li></ul>";

for ($a = 1; $a <= 10; $a++) {
    if ($a == 7) {
        break;
    }
    echo $a ."<br>";

}


for ($y=25; $y >= 1 ; $y--) {
    if ($y === 17 or $y === 19) {
        echo "no:" . $y . "<br>";
        break;
    } 
    echo "NUMBER: " . $y ."<br>";
}