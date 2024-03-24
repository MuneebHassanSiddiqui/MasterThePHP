<?php

echo "<h1>String-Str_split() & Chunk_split()</h1>";

echo "<ul><li><h2> 1)Str_split() Function</h2></li></ul>";

$name = "MALNEEB DANGER MUNEEB HASSAN IN FORM";

$newName = str_split($name, 3);

foreach ($newName as $key => $value) {
    echo "<ul><li>" . $value . "......." . "</li></ul>";
}

echo "<ul><li><h2> 2)Chunk_split() Function</h2></li></ul>";

$name1 = "MALNEEB DANGER";

$newName1 = chunk_split($name1, 3, "...");

echo "<ul><li>" . $newName1 . "......." . "</li></ul>";
