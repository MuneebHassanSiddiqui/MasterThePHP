<?php

#INDEXED ARRAY
echo "<h1>FOREACH WITH INDEXED ARRAY </h1>";
$color = [
    "RED",
    "BLUE",
    "GREEN",
    "PURPLE",
    "ORANGE",
    "BLACK",
    "WHITE"
];
echo "<ul>";
foreach ($color as $value) {
    echo "<li>" . $value . "<br></li>";
}
echo "</ul>";

#ASSOCIATE ARRAY 
echo "<h1>FOREACH WITH ASSOCIATE ARRAY </h1>";
$pc = array(
    "WINDOWS" => "GOOGLE",
    "macOS" => "SAFARI",
    "UBUNTU" => "BROWSER",
    "LINUX" => "CLI",
);
echo "<ul>";
foreach ($pc as $key => $words) {
    echo "<li>" . $key = $words . "<br></li>";
}
echo "</ul>";
