<?php


echo "<h1>ARRAY RAND & SHUFFLE</h1>";

#index array
$color = ['RED', 'PURPLE', 'BLUE', 'ORANGE', 'YELLOW'];

echo "<ul><li><h2>ARRAY_RAND FUNCTION</h2>
<h3>WITH INDEX ARRAY</h3>
</li></ul>";

$newColor = array_rand($color, 2);

echo $color[$newColor[0]] . "<br>";
echo $color[$newColor[1]];

// echo '<pre>';
// print_r($newColor);
// echo '</pre>';

#associated array
$cars = ['a' => 'VITZ', 'b' => 'ZIONIC', 'c' => 'PROTON', 'd' => 'HAMMER', 'e' => 'CAROLLA'];
echo "<ul><li>
<h3>WITH ASSOCIATED ARRAY</h3>
</li></ul>";

$newCars = array_rand($cars, 2);


echo $cars[$newCars[0]] . "<br>";
echo $cars[$newCars[1]];

#ARRAY SHUFFLE
echo "<ul><li><h2>SHUFFLE FUNCTION</h2>
<h3>WITH INDEX ARRAY</h3>
</li></ul>";


$color1 = ['RED', 'PURPLE', 'BLUE', 'ORANGE', 'YELLOW'];

shuffle($color1);

foreach ($color1 as $newColor1) {
    echo $newColor1 . "<br>";
}


echo "<ul><li><h2>SHUFFLE FUNCTION</h2>
<h3>WITH ASSOIATIVE ARRAY</h3>
</li></ul>";


$emp = [
    [1, "MUNEEB HASSAN", "MANAGER", 5000000],
    [2, "MALAIKAH MUNEEB", "v.MANAGER", 200000],
    [3, "MARIA HASSAN", "ASSISTANT", 250000],
    [4, "AYSHA", "COMPUTER OPERATOR", 400000],
    [5, "ROHAN", "PS", 50000],
    [6, "ABDULLAH", "DRIVER", 25000],
];

shuffle($emp);
echo "<table border = '1px' cellpadding='5px' cellspacing = '0'>
<style>
    table {
        width: 50%;
        border-collapse: collapse;
        margin: 20px 0;
        align-item:center;
        justify-content:center;
    }
    th, td {
        border: 1px solid #dddddd;
        text-align: center;
        padding: 8px;
    }
    th {
        background-color: #f2f2f2;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
</style >
";
echo "<tr>
<th>Emp no.</th>
<th>Emp Name</th>
<th>Designation</th>
<th>Salary</th>
</tr>";

foreach ($emp as $row1) {
    echo "<tr>";

    foreach ($row1 as $row2) {

        echo "<td> $row2 </td>";
    }
    echo "</tr>";
}
echo "</table>";
