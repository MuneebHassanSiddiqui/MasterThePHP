<?php


echo "<h1>MATH-Min() & Max() FUNCTION</h1>";

echo "<ul><li><h2>MATH-Min() FUNCTION</h2></li></ul>";
$str = [3, 41, 10, 20, 30, 89, 45, 78];
echo min($str) . "<br>";
$emp = [
    [1, "MUNEEB HASSAN", "MANAGER", "salary" => 5000000],
    [2, "MALAIKAH MUNEEB", "v.MANAGER", "salary" => 200000],
    [3, "MARIA HASSAN", "ASSISTANT", "salary" => 250000],
    [4, "AYSHA", "COMPUTER OPERATOR", "salary" => 400000],
    [5, "ROHAN", "PS", "salary" => 50000],
    [6, "ABDULLAH", "DRIVER", "salary" => 25000],
    [7, "JEO", "CLEANER", "salary" => 30000],
    [8, "HASSAN", "CEO", "salary" => 5000000000],
    [9, "KASIF", "DILEVERY BOY", "salary" => 5000000]
];
echo $femp = min(array_column($emp, "salary")) . "<br>";
echo min(true, 0);


echo "<ul><li><h2>MATH-Max() FUNCTION</h2></li></ul>";
$emp1 = [
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

echo  max(array_column($emp1, "salary")) . "<br>";
echo max(true, false);
