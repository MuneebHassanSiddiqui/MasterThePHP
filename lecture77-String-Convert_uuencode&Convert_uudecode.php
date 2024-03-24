<?php
echo "<h1>CONVERT_UUENCODE &  CONVERT_UUDECODE FUNCTION</h1>";

echo "<ul><li><h2>CONVERT_UUENCODE FUNCTION</h2></li></ul>";
$pass = "Hashtaq@123";
$in = convert_uuencode($pass);
echo "CONVERT_UUENCODE  =  > ENCRYPTE FORM  =  > " . $in . "<br>";
$pass1 = "nobody#123";
$in1 = convert_uuencode($pass1);
echo "CONVERT_UUENCODE  =  > ENCRYPTE FORM =  > " . $in1 . "<br>";
echo "<ul><li><h2>CONVERT_UUDECODE FUNCTION</h2></li></ul>";

echo  "CONVERT_UUDECODE  = > DECRYPTE FORM =====> " .  convert_uudecode($in) . "<br>";
echo "CONVERT_UUDECODE  =  > DECRYPTE FORM =====> "  . convert_uudecode($in1);
