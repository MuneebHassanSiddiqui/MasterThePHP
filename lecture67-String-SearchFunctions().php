<?php
echo "<h1>String-Search() Function</h1>";

echo "<ul><li><h2> 1)Strstr() Function</h2></li></ul>";
$code = "Hello every one how are you munibhassan how are you munibhassan";
echo strstr($code, "munibhassan"); //third function is optional

echo "<ul><li><h2> 2)Strchr() Function</h2></li></ul>";
$lorem = "Hello every one! my name is munib hassan I am a noob coder one!!!";
echo strchr($lorem, "one");

echo "<ul><li><h2> 3)Strrchr() Function</h2></li></ul>";
$lorem1 = "Hello every one! my name is munib hassan I one !!! am a noob coder";
echo strrchr($lorem1, "hello");

echo "<ul><li><h2> 4)Stristr() Function</h2></li></ul>";
$lorem2 = "Hello every one! my name is munib hassan I am a noob coder one!!!";
echo stristr($lorem2, "one", true);

echo "<ul><li><h2> 5)Strpbrk() Function</h2></li></ul>";
$lorem3 = "Hello every one! my name is munib hassan I am a noob coder one!!!";
echo strpbrk($lorem3, "bh");
