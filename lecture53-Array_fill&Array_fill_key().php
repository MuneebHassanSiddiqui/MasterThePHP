<?php

echo "<h1>ARRAY FILL & ARRAY FILL KEYS</h1>";
#********************************************************************************F
$e = ['MUNEEB', 'MALAIKAH', 'HASSAN', 'ROHAN', 'YOSUF', 'ALI'];

$newArray1 = array_fill_keys($e, 'TEST.IO');

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
            
            tr:nth-child(even) {
                background-color: #f9f9f9;
            }
        </style>';
echo '<th>Keys</th>
      <th>Values</th>';


echo '<ul><li><h2> 1) ARRAY_FILL_KEY  FUNCTION</h2></li></ul>';

foreach ($newArray1 as $key => $value) {
    echo '<tr>';
    echo " <td> $key</td>  <td> $value </td> ";
}
echo '</tr>';
echo '<table>';

#*********************************************************************************
echo '<ul><li><h2> 2) ARRAY_FILL FUNCTION</h2></li></ul>';

$newArray2 = array_fill(0, 100, 'MUNICODE.IO');


echo '<table>
          <th>Keys</th>
          <th>Values</th>';
foreach ($newArray2 as $key1 => $value1) {
    echo '<tr>';
    echo " <td> $key1</td>  <td> $value1 </td> ";
}
echo '</tr>';
echo '<table>';
