<?php


echo "<h1>MULTIDIMENSIONAL ASSOC ARRAY</h1>";
$std_marks = [

    "MUNEEB" => ["physics" => 90, "Math" => 86, "English" => 57, "Islamiat" => 89, "OOP" => 96],
    "MALAIKAH" => ["physics" => 90, "Math" => 86, "English" => 64, "Islamiat" => 89, "OOP" => 96],
    "MARIA" => ["physics" => 90, "Math" => 86, "English" => 56, "Islamiat" => 89, "OOP" => 46],
    "HASSAN" => ["physics" => 70, "Math" => 36, "English" => 37, "Islamiat" => 89, "OOP" => 46],
    "ROHAN" => ["physics" => 80, "Math" => 46, "English" => 70, "Islamiat" => 89, "OOP" => 96],
    "AYSHA" => ["physics" => 30, "Math" => 86, "English" => 47, "Islamiat" => 89, "OOP" => 34],
    "HUSSAIN" => ["physics" => 20, "Math" => 36, "English" => 45, "Islamiat" => 89, "OOP" => 32],
    "ALI" => ["physics" => 30, "Math" => 86, "English" => 77, "Islamiat" => 89, "OOP" => 35],
    "IBAD" => ["physics" => 56, "Math" => 86, "English" => 45, "Islamiat" => 89, "OOP" => 23],
    "ALSALAN" => ["physics" => 34, "Math" => 86, "English" => 45, "Islamiat" => 89, "OOP" => 23],
    "KASIF" => ["physics" => 90, "Math" => 86, "English" => 34, "Islamiat" => 89, "OOP" => 34],
    "PAKASH" => ["physics" => 45, "Math" => 86, "English" => 34, "Islamiat" => 89, "OOP" => 42],
    "MUNEEBA" => ["physics" => 95, "Math" => 86, "English" => 67, "Islamiat" => 65, "OOP" => 23],
    "FATIMA" => ["physics" => 43, "Math" => 46, "English" => 54, "Islamiat" => 34, "OOP" => 34],
    "MARIYAM" => ["physics" => 50, "Math" => 80, "English" => 27, "Islamiat" => 29, "OOP" => 25]

];


// echo "<pre>";
// print_r($std_marks); 
// echo"</pre>";


//   for($row = 0; $row < 10; $row++){
//     for ($col= 0; $col < 4 ; $col++) { 
//       echo $std_marks[$row][$col];
//     }
//   }

echo "<table border='2px'; cellpadding=5px; cellspacing=0px;>";
echo "<tr>
<th>STUDENT NAME</th>
<th>Physics</th>
<th>Math</th>
<th>English</th>
<th>Islamiat</th>
<th>OOP</th>
</tr>";
foreach ($std_marks as $key => $v1) {
    echo "<tr>
    <td>$key</td>";
    foreach ($v1 as $v2) {
        echo "<td>$v2</td>";
    }
    echo "</tr>";
}
echo "</table>";
