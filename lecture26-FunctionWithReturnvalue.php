<?php

echo "<h1>FUNCTION WITH RETURN VALUE</h1>";

function hello($fname, $last)
{
    $v = "$fname $last <br>";

    return $v;
}

$name = hello("MUNEEB", "HASSAN");

echo $name;


function sum($math, $eng, $urdu, $isl, $sst)
{
    $s = $math + $eng + $urdu + $isl + $sst;

    return $s;
}

$total = sum("70", "75", "80", "90", "100");




function percent($s)
{
    $per = $s / 5;
    echo $per . "%";
}


percent($total);