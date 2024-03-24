<?php

echo "<h1>ARRAY_WALK & ARRAY_WALK_RECURSIVE</h1>";
#array walk 
echo '<ul><li><h2> 1) ARRAY_WALK FUNCTION</h2></li></ul>';

$cars = [
    90 => 'CAROLLA',
    100 => 'VITZ',
    120 => 'MARK X',
    670 => 'EVERY',
    80 => 'ALTO',
    78 => 'CITY',
    28 => 'FROTUNER'
];

array_walk($cars, "myFunction", "THIS USED TO SHOW SAME STAEMENT");

function myFunction($var, $key, $parm)
{
    echo '<table>
    <style>
            table {
                width: 50%;
                border-collapse: collapse;
                margin: 20px 0;
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
        </style>';
    echo "<th>ARRAY KEYS</th>
          <th>USED</th>
          <th>ARRAY VALUES</th>
        ";
    echo '<tr>';
    echo "<td>$key</td><td>$parm</td><td>$var</td> ";
    echo '</tr>';
    echo "</table>";
}

#array walk recursive
echo '<ul><li><h2> 2) ARRAY_WALK_RECURSIVE FUNCTION</h2></li></ul>';

$rollno = [
    1 => 'MALAIKAH',
    23 => 'MUNIB',
    1223 => 'HASSAN',
    62 => 'HAISAM',
    12 => 'AYAT',
    734 => 'AIGUL',
    86 => 'SHAHREYAR'
];

$cars1 = [
    $rollno,
    90 => 'CAROLLA',
    100 => 'VITZ',
    120 => 'MARK X',
    670 => 'EVERY',
    80 => 'ALTO',
    78 => 'CITY',
    28 => 'FROTUNER'
];

array_walk_recursive($cars1, 'MyBack');

function MyBack($value, $key1)
{
    echo '<table>
    <style>
            table {
                width: 50%;
                border-collapse: collapse;
                margin: 20px 0;
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
        </style>';
    echo "<th>ARRAY KEYS</th>
          <th>ARRAY VALUES</th>
        ";
    echo '<tr>';
    echo " <td>$key1</td>  <td>$value</td>";
    echo '</tr>';
    echo "</table>";
}
