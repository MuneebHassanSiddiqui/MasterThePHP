<?php

echo "<h1>String-Addslashes  &Stripslaches()Function</h1>";

$a = "My name is 'MUNEEBHASSAN'";
echo " ADDSLASHES() Fn WHEN YOU ARE SAVE YOUR DATA IN DATABASE  :  " . addslashes($a) . "<br>";

echo " STRIPSLASHES() Fn WHEN YOU ARE SHOW YOUR DATA IN WITHOUT SLASHES EFFECTS   :  " . stripslashes($a) . "<br>";

echo "<h1>String-Addcslashes  &Stripcslaches()Function</h1>";

$name = " MUNEEB HASSAN, MALAIKAH, AYSHA ";
$input =  addcslashes($name, ", 
  ");

echo "ADDCSLASHES FUNCTION = => " . $input . "<br>";

echo  "STRIPCSlACHES = => " . stripcslashes($input) . "<br>";
