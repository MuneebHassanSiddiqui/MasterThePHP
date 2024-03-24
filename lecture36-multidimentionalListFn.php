<?php
echo "<h1>MULTIDIMENSIONALL LIST() FUNCTION</h1>";
#list function with INDEXED array 
$emp = [
    [1, "MUNEEB HASSAN", "MANAGER", 5000000],
    [2, "MALAIKAH MUNEEB", "v.MANAGER", 200000],
    [3, "MARIA HASSAN", "ASSISTANT", 250000],
    [4, "AYSHA", "COMPUTER OPERATOR", 400000],
    [5, "ROHAN", "PS", 50000],
    [6, "ABDULLAH", "DRIVER", 25000],
    [7, "JEO", "CLEANER", 30000],
    [8, "HASSAN", "CEO", 5000000000],
    [9, "KASIF", "DILEVERY BOY", 5000000]
];

echo "<h1 style=' text-align: center;
justify-content: center; color:red;'>OFFICE DATA WITH INDEXED ARRAY</h1>";
echo "<table border=1px; cellpadding=5px; cellspacing= 0px;>
 <tr>
 <th>EMP.ID</th>
 <th>NAME</th>
 <th>DESIGNATION</th>
 <th>SALARY</th>
 </tr>";
foreach ($emp as list($id, $name, $designation, $salary)) {
    echo "<tr><td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary</td></tr>";
}
echo "</table>";


$emp = [
    ["id" => 1, "name" => "MUNEEB HASSAN", "designation" => "MANAGER", "salary" => 5000000],
    ["id" => 2, "name" =>  "MALAIKAH MUNEEB", "designation" => "v.MANAGER", "salary" => 200000],
    ["id" => 3, "name" => "MARIA HASSAN", "designation" => "ASSISTANT", "salary" => 250000],
    ["id" => 4, "name" => "AYSHA", "designation" => "COMPUTER OPERATOR", "salary" => 400000]

];

#list function with ACCOSIATE array 
echo "<h1 style=' text-align: center;
justify-content: center; color:red;'>OFFICE DATA WITH ACCOSIATE ARRAY</h1>";
echo "<table border=1px; cellpadding=5px; cellspacing= 0px; >
 <tr>
 <th>EMP.ID</th>
 <th>NAME</th>
 <th>DESIGNATION</th>
 <th>SALARY</th>
 </tr>";
foreach ($emp as list("id" => $id, "name" => $name, "designation" => $designation, "salary" => $salary)) {
    echo "<tr><td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary</td></tr>";
}
echo "</table>";
