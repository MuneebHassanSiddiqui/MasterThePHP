<?php


echo "<h1>String-Trim() Function</h1>";
echo "<ul><li><h2> 1)Trim() Function</h2></li></ul>";
$str = "MUNEEB HASSAN";
echo "Original str = " . $str . "<br>";
echo "Trimmed str = " . trim($str, "MN") . "<br>"; //trim function used to trim both sides

echo "<ul><li><h2> 2)Ltrim() Function</h2></li></ul>";
$str1 = "========MALAIKAH MUNEEB==";
echo "Original str = " . $str1 . "<br>";
echo "Trimmed str = " .  ltrim($str1, "=") . "<br>"; //Ltrim function used to trim left sides

echo "<ul><li><h2> 3)Rtrim() Function</h2></li></ul>";
$str2 = "===MUNICODE ERA========";
echo "Original str = " . $str2 . "<br>";
echo "Trimmed str = " .  rtrim($str2, "=") . "<br>";//Rtrim function used to trim Right side sides

echo "<ul><li><h2> 3)Chop() Function</h2></li></ul>";
$str2 = "MUNICODE ERA========";
echo "Original str = " . $str2 . "<br>";
echo "Trimmed str = " . chop($str2, "=") . "<br>";//Rtrim====CHOP function used to trim Right side sides
