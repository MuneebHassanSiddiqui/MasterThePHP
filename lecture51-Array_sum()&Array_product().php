<?php
echo "<h1>ARRAY SUM & ARRAY PRODUCT</h1>";


echo "<ul><li><h2> 1) ARRAY SUM FUNCTION</h2></li></ul>";

#multidimensional Array
$emp = [
    [
        "id" => 2001,
        "name" => "MUNEEB HASSAN",
        "salary" => 80000000,
    ],
    [
        "id" => 2002,
        "name" => "MALAIKAH MUNEEB",
        "salary" => 1500000,
    ],
    [
        "id" => 2003,
        "name" => "MARIA",
        "salary" => 100000,
    ],
    [
        "id" => 2004,
        "name" => "HASSAN",
        "salary" => 30000,
    ],
    [
        "id" => 2005,
        "name" => "HUSSIAN",
        "salary" => 20000,
    ],
    [
        "id" => 2006,
        "name" => "ALI",
        "salary" => 25000,
    ],
    [
        "id" => 2007,
        "name" => "NADEEEM",
        "salary" => 20000,
    ],
];
#****************************array_sum function********************
#index array
$a = [10, 20, 30, 40, 50, 60, 70];
echo "<b> 1 ) SUM = </b>" . array_sum($a) . "<br>";
array_column($emp, "salary");
echo "<b> 2 )SUM OF EMP SALARY = </b>" . array_sum(array_column($emp, "salary"));
#*************************array_product***************************
echo "<ul><li><h2> 2) ARRAY PRODUCT FUNCTION</h2></li></ul>";

echo "  PRODUCT OF ALL SALARY = " . array_product(array_column($emp, "salary"));


