<?php
#1st METHOD
function mun()
{
    echo "MUNICODE";
}
$func = "mun";
$func();

#2nd METHOD
$function = function ($name) {//this called anonymous function
    echo"2nd method of making variable function $name";
};
$function("muneeb hassan");