<?php

echo "<h1>ARRAY FLIP & CHANGE KEY CASE FUNCTION</h1>";

#ARRAY FLIP FUNCTION
$cars = ['VOLVO' => 90, 'CAROLLA' => 3829, 'TOYOTO' => 238, 'TESLA' => 8847, 'EVERY' => 6347, 'SWIFT' => 6745];


$newCars = array_flip($cars);

echo "<ul><li><h2> (1 ARRAY FLIP FUNCTION</h2></li></ul>";
echo '<pre>';
print_r($newCars);
echo '</pre>';

#array_change_key_case
$age = ['Bill' => 89, 'Seo' => 12, 'Jeo' => 45, 'Josh' => 65, 'Harry' => 90];

#array_change_key_case(variable , case)
$newAge = array_change_key_case($age, case: CASE_UPPER);

echo "<ul><li><h2> (2 ARRAY CHANGE KEY CASE FUNCTION</h2></li></ul>";
echo '<pre>';
print_r($newAge);
echo '</pre>';
