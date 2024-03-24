<?php


#passing argument by value
// function i($a)
// {
//     $a = "HELLO WORLD!!";
// }
// $str = "HEY";
// i($str);
// echo $str . "<br>";


// #passing argument by reference
// function b(&$b)
// {
//     $b = "PASSING THE VALUE BY REFERENCE";
// }
// $str1 = "HEY";
// b($str1);
// echo $str1 . "<br>";

#2
function str(&$name)
{
    $name = "HELLO MUNEEB HASSAN";
}

$name1 = "MUNEEBHASSAN";

str($name1);

echo $name1;
