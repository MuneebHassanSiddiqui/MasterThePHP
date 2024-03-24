<?php
echo "<h1>Array Explode() & Implode() Function</h1>";
echo "<ul><li><h2> 1)Array Explode() Function</h2></li></ul>";

$words = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ut voluptatem laudantium qui, animi sed, tempore aperiam illum quasi, alias ex dolore assumenda!";
$NewWord = explode(",", $words, 0);
//explode("SEPRATOR", VARIABLE NAME , MAXIMUM ARRAY INDEXES);
// echo "<pre>";
// print_r($NewWord);
// echo "</pre>";
foreach ($NewWord as $word) {
    echo "<ul><li>" . $word . "</li></ul>";
}

echo "<ul><li><h2> 2)Array Implode() Function</h2></li></ul>";
$array1 = array(
    "Lorem,",
    "ipsum dolor sit amet consectetur",
    " Laboriosam ut voluptatem",
    "tempore aperiam illum quasi",
    "assumenda!",
    "animi sed"
);
// $newArray = implode(" ", $array1,);
$newArray = join(" ", $array1); //same functionality 
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";
echo $newArray;
