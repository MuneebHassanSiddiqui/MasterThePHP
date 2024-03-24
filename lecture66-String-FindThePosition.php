<?php

echo "<h1>Strng - Find The Positions() Function</h1>";
echo "<ul><li><h2> 1)Strpos & Strrpos() Function =>This Function are case-sensitive</h2></li></ul>";
$m = "Hello every one how are you one!";
$oldM = ucwords($m); //each word are upper case
$newM = strpos($m, "one");
$newa = strrpos($m, "one");
echo "<ul><li>STRPOS() = " . chunk_split($newM, 10, "......................this function are case-sensitive") . "</ul></li>";
echo "<ul><li>STRRPOS() = " . chunk_split($newa, 10, "......................this function are case-sensitive") . "</ul></li>";


/**************************************************************************** */
echo "<ul><li><h2> 2)Stripos & Strripos() Function =>This Function are case-Insensitive</h2></li></ul>";
$code = "possible is every thing i depend on your work and you know you work and possible it";
$newc = stripos($code, "POssible");
$newv = strripos($code, "Possible");
echo "<ul><li>STRIPOS() = " . chunk_split($newc, 10, "......................this function are case-insensitive") . "</ul></li>";
echo "<ul><li>STRRIPOS() = " . chunk_split($newv, 10, "......................this function are case-insensitive") . "</ul></li>";
