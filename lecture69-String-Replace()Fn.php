<?php
echo "<h1>String-Replace() Function</h1>";

echo "<ul><li><h2> 1)Str_Replace& Str_iReplace() Function</h2></li></ul>";
$words = "hello every one i am PHP developer with no company experience!!";
$find = ['PHP', 'Developer'];
$to = ['PYTHON', 'ENGINEER'];
echo "<ul><li>" . str_replace($find, $to, $words) . "................case-sensitive</li></ul>";
echo "<ul><li>" . str_ireplace($find, $to, $words) . "................incase-sensitive</li></ul>";

//this function can also work on array replacement!!
$color = ['YELLOW', 'GAUVA', 'GREEN', 'PURPLE', 'ORANGE', 'GREEN', 'BLUE', 'RED'];
$find1 = ['yellow', 'gauva'];
$to1 = ['orange', 'grapes'];
echo "<pre>";
print_r(str_ireplace($find1, $to1, $color));
echo "</pre>";

echo "<ul><li><h2> 2)Substr_Replace() Function</h2></li></ul>";

$lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nobis suscipit eius. Nihil expedita iste quas cupiditate totam aspernatur obcaecati. Ab debitis at necessitatibus esse facilis fugit velit sunt consectetur dolore ullam tempore ducimus quod explicabo libero, molestiae non maiores reiciendis adipisci odit dicta ea earum eaque deleniti voluptatum. Id, nihil";
echo substr_replace($lorem, "my name is munibhassan i am php developer", 20, -10);


echo "<ul><li><h2> 2)Strtr() Function</h2></li></ul>";
$Myself = "HELLO MY NAME IS MUNEEBHASSAN I AM A NOOB PHP DEVELOPER";
$array = ["HELLO" => "HII" , "MUNEEBHASSAN"=>"MALAIKAHMUNEEB"];
echo strtr($Myself, $array);