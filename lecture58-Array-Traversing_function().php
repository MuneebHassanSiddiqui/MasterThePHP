<?php

echo "<h1>ARRAY TRAVERSING FUNCTION</h1>";
$fruits = ['APPLE', 'BANANA', 'GRAPES', 'PEACH', 'PEA', 'MANGO', 'ORANGE', 'AVADO'];

//********************************************************/
#this function used to move enternal pointer
#pos function
#key function
#next function
#preivious Function
//********************************************************/
#using pick the value and print it
#current
#reset function
#End function
#each function-this function is removed in the php 8 version
#**********************************************************     
#next function
next($fruits);

#current function
echo "THIS IS CURRENT: " . current($fruits) . "<br>";
#key function
echo "THIS KEY FUNCTION: " . key($fruits) . "<br>";
next($fruits);

#using current function Program
if (current($fruits) == 'BANANA') {
    echo 'YOUR ARE SUCCESSFULL';
} else {
    echo 'YOUR ARE NOT SUCCESSFULL';
}

#prev function
prev($fruits);

if (current($fruits) == 'BANANA') {
    echo 'YOUR ARE SUCCESSFULL' . "<br>";
} else {
    echo 'YOUR ARE NOT SUCCESSFULL' . "<br>";
}
#end function
end($fruits);

if (current($fruits) == 'AVADO') {
    echo 'YOUR ARE SUCCESSFULL' . "<br>";
} else {
    echo 'YOUR ARE NOT SUCCESSFULL' . "<br>";
}

#each Function
//this function will be removerd in php this version 

#reset function
reset($fruits);

if (current($fruits) == 'APPLE') {
    echo 'YOUR ARE SUCCESSFULL' . "<br>";
} else {
    echo 'YOUR ARE NOT SUCCESSFULL' . "<br>";
}
