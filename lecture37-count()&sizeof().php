<?php

$emp = [
    [1, "MUNEEB HASSAN", "MANAGER", 5000000],
    [2, "MALAIKAH MUNEEB", "v.MANAGER", 200000],
    [3, "MARIA HASSAN", "ASSISTANT", 250000],
    [4, "AYSHA", "COMPUTER OPERATOR", 400000],
    [5, "ROHAN", "PS", 50000],
    [6, "ABDULLAH", "DRIVER", 25000],
    [7, "JEO", "CLEANER", 30000],
    [8, "HASSAN", "CEO", 5000000000],
    [9, "KASIF", "DILEVERY BOY", 5000000]
];

// #all values are count in our array by using Count() function
// echo count($emp, 1);
// #all values are count in our array by using sizeof() function
// echo count($emp, 1);

$len = count($emp[0], 1);


echo "<h1 style=' text-align: center;
justify-content: center; color:red;'>COUNT() & SIZEOF()</h1>";
for ($i = 0; $i < $len; $i++) {

    echo $emp[0][$i];
}

$std_marks = [

    "MUNEEB" => ["physics" => 90, "Math" => 96, "English" => 57, "Islamiat" => 96, "OOP" => 96],
    "MALAIKAH" => ["physics" => 90, "Math" => 86, "English" => 64, "Islamiat" => 89, "OOP" => 96],
    "MARIA" => ["physics" => 90, "Math" => 86, "English" => 56, "Islamiat" => 89, "OOP" => 46],
    "HASSAN" => ["physics" => 70, "Math" => 36, "English" => 37, "Islamiat" => 89, "OOP" => 46],
];

#check specific colum value
echo count($std_marks['MALAIKAH']);

#check the same values and figure out the same values
echo "<pre>";
echo print_r(array_count_values($std_marks['MUNEEB']));
echo "</pre>";

$std_marks1 = [

    "MUNEEB" => ["physics" => 90, "Math" => 86, "English" => 57, "Islamiat" => 96, "OOP" => 96],
    "MALAIKAH" => ["physics" => 90, "Math" => 86, "English" => 64, "Islamiat" => 89, "OOP" => 96],
    "MARIA" => ["physics" => 90, "Math" => 86, "English" => 56, "Islamiat" => 89, "OOP" => 46],
    "HASSAN" => ["physics" => 70, "Math" => 36, "English" => 37, "Islamiat" => 89, "OOP" => 46],
];

$new = sizeof($std_marks1);

echo $new;
