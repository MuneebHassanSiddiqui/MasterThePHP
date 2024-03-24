<?php


echo "<h1>ARRAY_VALUES & ARRAY_UNIQUE FUNCTIONS</h1>";

#array values function
$pc = [012 => "LINUX", 032 => "mcOS", "UBUNTU" => "HACKED"]; //give all the values in new array 
echo "<ul><li>
<h2> 1 ) array_values Function</h2></li></ul>";
$newPc = array_values($pc);
echo "<pre>";
print_r($newPc);
echo "</pre>";


#array unique function
$name = ['a' => 'MUNEEB', 'b' => 'HASSAN', 'c' => 'MALAIKAH', 'd' => 'HASSAN', 'e' => 'HASSAN'];//remove all duplicate value

echo "<ul><li>
<h2> 2 ) array_unique Function</h2></li></ul>";
$newName = array_unique($name);
echo "<pre>";
print_r($newName);
echo "</pre>";
