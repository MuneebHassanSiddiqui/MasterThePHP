<?php


function plus($a, $b) #=>this $a & $b is parameter
{
    echo $a += $b;
}

plus(10, 20); #=>this 10 & 20 is argument

function sub($x, $y) #=>this $a & $b is parameter
{
    echo $x -= $y;
}

sub(10, 20);#=>this 10 & 20 is argument


echo "<ul>";
function hello($name, $lastname)#=>this $name & $lastname is parameter
{
    echo  "<li> HELLO $name $lastname </li><br> ";
}
echo "</ul>";



hello("MUNEEB", "HASSAN");#=>this MUNEEB & HASSAN is argument
hello("MALAIKAH", "MUNEEB");
hello("AYSHA", "HASSAN");
hello("YOUSUF", "NAVEED");
