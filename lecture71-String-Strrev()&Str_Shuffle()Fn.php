<?php

echo "<h1>String-Shuffle() Function</h1>";
echo "<ul><li><h2> 1)Strrev() Function</h2></li></ul>";


echo "<ul><li> " . strrev("MY NAME IS MUNEEB HASSAN AND I AM A PHP WEB-DEV") . "</li></ul>";

echo "<ul><li> " . strrev("MY NAME IS JEO MARKS  ALI DIVAN EVAN AND I AM A PHP WEB-DEV") . "</li></ul>";

echo "<ul><li><h2> 2)Str_Shuffle() Function</h2></li></ul>";

echo "<ul><li> " . str_shuffle("MY NAME IS MUNEEB HASSAN AND I AM A PHP WEB-DEV") . "</li></ul>";

echo "<ul><li> " . str_shuffle("MY NAME IS JEO MARKS  ALI DIVAN EVAN AND I AM A PHP WEB-DEV") . "</li></ul>";
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

echo "<h1>THIS ARRAY_SHUFFLE FUNCTION</h1>";
foreach ($emp as $row1) {
    echo "<tr>";

    foreach ($row1 as $row2) {

        echo "<td> $row2 </td>";
    }
    echo "</tr>";
}
echo "</table>";
