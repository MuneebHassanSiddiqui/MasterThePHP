 <?php

#*************1 METHOD OF MAKING ARRAY******************

$pc= array("UBUTU","LINUX","WINDOw","mcOS");

echo $pc[0]."<br>";
echo $pc[1]."<br>";
echo $pc[2]."<br>";
echo $pc[3]."<br>";


#*************2 METHOD OF MAKING ARRAY******************
$cars= ["MEHRAN",2306,"CULTUS","Vitz","PROTON"];
echo $cars[0]."<br>";
echo $cars[1]."<br>";
echo $cars[2]."<br>";
echo $cars[3]."<br>";
echo $cars[4]."<br>";


#***********ANOTHER METHOD OF MAKING ARRAY***************
$car[0] = 0212;
$car[1] = "green";
$car[2] = "red";
$car[3] = "orange";


echo "<pre>";
print_r($car);
echo "</pre>";

#When the array list are to long we are using loops
#**********USING ARRAY IN LOOPS***************#

$n = [1,2,3,4,5,6,7,8,9,10,11,12,13,14];
echo "<ul>";
for ($i=0; $i < 14 ; $i++) { 
    echo "<li> $n[$i] </li>";
}
echo "<ul>";

?>