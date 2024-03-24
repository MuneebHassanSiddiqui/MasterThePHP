<?php
echo "<h1>String-Str_pad & Str_repeat() Function</h1>";
echo "<ul><li><h2> 1)Str_pad() Function</h2></li></ul>";

$words = "HELLO WORLD!!!";
$words1 = "I LOVE PHP";
$words2= "I LOVE PHP ";
echo "<ul><li>" . str_pad($words, 30, "-", STR_PAD_LEFT)  . "</li></ul>";
echo "<ul><li>" . str_pad($words, 30, "-", STR_PAD_BOTH)  . "</li></ul>";
echo "<ul><li>" . str_pad($words, 30, "-", STR_PAD_RIGHT)  . "</li></ul>";

echo "<ul><li><h2> 1)Str_repeat() Function</h2></li></ul>";
echo "<ul><li>" . str_repeat($words, 3)  . "</li></ul>";
echo "<ul><li>" . str_repeat($words1, 4)  . "</li></ul>";
echo "<ul><li>" . str_repeat($words2, 2)  . "</li></ul>";
