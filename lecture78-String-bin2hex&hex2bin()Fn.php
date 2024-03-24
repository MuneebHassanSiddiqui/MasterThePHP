<?php
echo "<h1>BIN2HEX & HEX2BIN FUNCTION</h1>";

echo "<ul><li><h2>BIN2HEX FUNCTION</h2></li></ul>";

$str = "Lorem ipsum dolor sit";

echo "<ul><li>ORIGINAL FORM =  >" . $str . "</li></ul>";

$in = "<ul><li>BIN2HEX FUNCTION = > ENCREYPTE FORM ===>   " . bin2hex($str) . "</li></ul>";
echo $in;

echo "<ul><li><h2>BIN2HEX FUNCTION</h2></li></ul>";
echo "<ul><li>BIN2HEX FUNCTION = > DECREYPTE FORM ===>   " . hex2bin("4c6f72656d20697073756d20646f6c6f7220736974") . "</li></ul>";
