<?php

echo "<h1>String-Length & Count() Function</h1>";

echo "<ul><li><h2> 1)StrLen() Function</h2></li></ul>";
$random = "Hello every one! my name is munib hassan I am a noob coder";
echo (strlen($random) == 58) ? "SUCCESSFULLY RUN" : "NO!! TRY AGAIN";

echo "<ul><li><h2> 2)Str_Word_count() Function</h2></li></ul>";

$hii = "Hello every one! my name is munib hassan I am a noob coder";
// str_word_count(string variable name ,0,1,2);
//1 return array as per value indexes
//2 return array value and key both
echo (str_word_count($hii) == 13) ? "SUCCESSFULLY RUN" : "NO TRY AGAIN!!";

$array = "hello assalam alikum! how are you";
$array1 = str_word_count($array, 1);
$len = count($array1);
for ($i = 0; $i < $len; $i++) { //for loop 
    echo  "<ul><li>" . chunk_split($array1[$i], 10, "..........this is array ") . "</li></ul>";
}

echo "<ul><li><h2> 3)Substr_Count() Function</h2></li></ul>";

$lie = "Hello every one! my name is munib hassan I am a one coder";
// echo chunk_split(substr_count($lie, "one"), 10, "........THIS IS SUBSTR FUNCTION");

echo (substr_count($lie, "one") == 2) ? "YES YOU ARE CORRECT BRO!!!!2 " : "NO PLEASE CHECK THE STATEMENT";
