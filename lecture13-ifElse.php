<?php


echo "<h1>PHP IF ELSE </h1>";


#TRUE STATEMENT
$a = 200;

if ($a < 101) {
    echo "101 is greater . <br>";
} else {
    echo "101 is smaller. <br>";
}


#FALSE STATEMENT
$x = 1000;
if ($a > 110) {
    echo "$a : is smaller. <br>";
} else {
    echo "$a : is greater";
}

$c = "car";
$v = "boy";

if ($c == $v) {
    echo "both are same";
} else {

    echo "BOTH ARE NOT SAME . <br>";
}

$gender = "male";
$name = "MUNIB";

// if ($gender == "male") {
//     echo "HELLO Mr." .  $name;
// } else {
//     echo "HELLO miss" . $name;
// }


echo ($gender == "male") ? "HELLO MRS. $name": "HELLO MISS. $name";
