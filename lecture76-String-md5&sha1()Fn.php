<?php

echo "<h1>String-md5 & sha1()Fn</h1>"; 
echo "<ul><li><h2>md5()Fn</h2></li></ul>";
$words = "HELLO EVERY ONE HOW ARE YOU";
echo "<ul><li>md5 Function =>> " . md5($words, true) . "</li></ul>";
$pass = (md5($words) == "43206b1b9509eefb968e5b3ea1438a5f") ? "<ul><li>PASSWORD MATACHED</li></ul>" : "NOT MATCHED";
$insert = 1;
if ($insert == 1) {
    echo $pass;
}

echo "<ul><li><h2>sha1 ()Fn</h2></li></ul>";

$word1 = "Masdhasdjashdoasudjasdioasdausjdasjbcauhsuasdjopasdasadiasjnxjkhuisahhxuaus";

echo "<ul><li>sha1 Function =>> " . sha1($word1, true) . "</li></ul>";

$pass1 = (sha1($words) == "43206b1b9509eefb968e5b3ea1438a5f") ? "<ul><li>PASSWORD MATACHED</li></ul>" : "<ul><li>NOT MATCHED</li></ul>";
$insert = 1;
if ($insert == 1) {
    echo $pass1;
}
