<?php
echo "<h1>ARRAY INTERSECT FUNCTIONS</h1>";
#array_key_first
echo "<ul><li>
<h2>array_Intersect Function</h2></li></ul>";

$name = ['a' => 'MUNEEB', 'b' => 'HASSAN', 'c' => 'MALAIKAH', 'd' => 'BIAA', 'e' => 'MARIA'];

$name1 = ['a' => 'MUNEEB', 'g' => 'HUSAIN', 'c' => 'BIAA', 'i' => 'BIA', 'd' => 'RIA'];


// $name2 = ['a' => 'MUNEEB', 'g' => 'HUSAIN'];

$newName = array_intersect($name, $name1); # $name2); //output is onlyy same intersect values

echo "<pre>";
print_r($newName);
echo "</pre>";


#array intersect KEY
$cars = ['11' => 'marcadise', '12' => 'bmw', '13' => 'vitz', '14' => 'swift', '15' => 'carolla'];

$cars1 = ['11' => 'marcadise', '19' => 'fog', '90' => 'mehran', '14' => 'city', '15' => 'carolla'];

echo "<ul><li>
<h2>array_Intersect_keys Function</h2></li></ul>";

$newCars = array_intersect_key($cars, $cars1); //output is onlyy same intersect keys
echo "<pre>";
print_r($newCars);
echo "</pre>";





#array_intersect_assoc function
echo "<ul><li>
<h2>array_Intersect_assoc Function</h2></li></ul>";
$rank = [1 => 'POOR', 19 => 'RICH', 12 => 'NORMAL', 100 => 'ELITE'];
$rank1 = [1 => 'POOR', 90 => 'ACE', 20 => 'NORMAL', 40 => 'CROWN'];
$newbook = array_intersect_assoc($rank, $rank1); //they check both keys and values echo 

echo "<pre>";
print_r($newbook);
echo "</pre>";



#array_intersect_Uassoc function
echo "<ul><li>
<h2>array_Intersect_uassoc Function</h2></li></ul>";


function compareFunction($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    ($a > $b) ? 1 : -1;
}

$game = ['a' => 'pubg', 'd' => 'call of duty', 12 => 'price', 'h' => 'ELITE game'];
$game1 = ['a' => 'pubg', '90' => 'ELITE game', 20 => 'GTA 5', 40 => 'BGMI'];
$newGames = array_uintersect_assoc($game, $game1, "compareFunction"); //they check both keys and values echo y user define function 
// $newGames = array_intersect_uassoc($game, $game1, "strcasecmp");//pre defined function
echo "<pre>";
print_r($newGames);
echo "</pre>";

#array_intersect_Uassoc function
echo "<ul><li>
<h2>array_Intersect_ukey Function</h2></li></ul>";


function comparevalues($a, $b)
{
    if ($a === $b) {
        return 0;
    }

    ($a > $b) ? 1 : -1;
}

$subjects = ["a" => "red", "b" => "green", "c" => "blue","d" => "yellow"];
$subject1 = ["a" => "red", "f" => "green", "d" =>"purple"];


// $newSubjects = array_intersect_ukey($subjects, $subject1, "compareFunction");

// $newSubjects = array_uintersect($subjects, $subject1, "compareFunction");

$newSubjects = array_uintersect_uassoc($subjects,$subject1, "compareFunction","comparevalues");

echo "<pre>";
print_r($newSubjects);
echo "</pre>";


