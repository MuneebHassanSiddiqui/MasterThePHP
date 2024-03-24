<?php

echo "<h1>MULTIDIMENSIONAL ARRAY</h1>";
$emp = [
    [1, "MUNEEB HASSAN", "MANAGER", 5000000],
    [2, "MALAIKAH MUNEEB", "v.MANAGER", 200000],
    [3, "MARIA HASSAN", "ASSISTANT", 250000],
    [4, "AYSHA", "COMPUTER OPERATOR", 400000],
    [5, "ROHAN", "PS", 50000],
    [6, "ABDULLAH", "DRIVER", 25000],
    [7, "JEO", "CLEANER", 30000],
    [8, "HASSAN", "CEO", 5000000000],
    [9, "KASIF", "DILEVERY BOY", 5000000],
    [1, "MUNEEB HASSAN", "MANAGER", 5000000],
    [2, "MALAIKAH MUNEEB", "v.MANAGER", 200000],
    [3, "MARIA HASSAN", "ASSISTANT", 250000],
    [4, "AYSHA", "COMPUTER OPERATOR", 400000],
    [5, "ROHAN", "PS", 50000],
    [6, "ABDULLAH", "DRIVER", 25000],
    [7, "JEO", "CLEANER", 30000],
    [8, "HASSAN", "CEO", 5000000000],
    [9, "KASIF", "DILEVERY BOY", 5000000],
    [1, "MUNEEB HASSAN", "MANAGER", 5000000],
    [2, "MALAIKAH MUNEEB", "v.MANAGER", 200000],
    [3, "MARIA HASSAN", "ASSISTANT", 250000],
    [4, "AYSHA", "COMPUTER OPERATOR", 400000],
    [5, "ROHAN", "PS", 50000],
    [6, "ABDULLAH", "DRIVER", 25000],
    [7, "JEO", "CLEANER", 30000],
    [8, "HASSAN", "CEO", 5000000000],
    [9, "KASIF", "DILEVERY BOY", 5000000],
    [1, "MUNEEB HASSAN", "MANAGER", 5000000],
    [2, "MALAIKAH MUNEEB", "v.MANAGER", 200000],
    [3, "MARIA HASSAN", "ASSISTANT", 250000],
    [4, "AYSHA", "COMPUTER OPERATOR", 400000],
    [5, "ROHAN", "PS", 50000],
    [6, "ABDULLAH", "DRIVER", 25000],
    [7, "JEO", "CLEANER", 30000],
    [8, "HASSAN", "CEO", 5000000000],
    [9, "KASIF", "DILEVERY BOY", 5000000],
    [1, "MUNEEB HASSAN", "MANAGER", 5000000],
    [2, "MALAIKAH MUNEEB", "v.MANAGER", 200000],
    [3, "MARIA HASSAN", "ASSISTANT", 250000],
    [4, "AYSHA", "COMPUTER OPERATOR", 400000],
    [5, "ROHAN", "PS", 50000],
    [6, "ABDULLAH", "DRIVER", 25000],
    [7, "JEO", "CLEANER", 30000],
    [8, "HASSAN", "CEO", 5000000000],
    [9, "KASIF", "DILEVERY BOY", 5000000],
    [1, "MUNEEB HASSAN", "MANAGER", 5000000],
    [2, "MALAIKAH MUNEEB", "v.MANAGER", 200000],
    [3, "MARIA HASSAN", "ASSISTANT", 250000],
    [4, "AYSHA", "COMPUTER OPERATOR", 400000],
    [5, "ROHAN", "PS", 50000],
    [6, "ABDULLAH", "DRIVER", 25000],
    [7, "JEO", "CLEANER", 30000],
    [8, "HASSAN", "CEO", 5000000000],
    [9, "KASIF", "DILEVERY BOY", 5000000],
    [1, "MUNEEB HASSAN", "MANAGER", 5000000],
    [2, "MALAIKAH MUNEEB", "v.MANAGER", 200000],
    [3, "MARIA HASSAN", "ASSISTANT", 250000],
    [4, "AYSHA", "COMPUTER OPERATOR", 400000],
    [5, "ROHAN", "PS", 50000],
    [6, "ABDULLAH", "DRIVER", 25000],
    [7, "JEO", "CLEANER", 30000],
    [8, "HASSAN", "CEO", 5000000000],
    [9, "KASIF", "DILEVERY BOY", 5000000],
    [1, "MUNEEB HASSAN", "MANAGER", 5000000],
    [2, "MALAIKAH MUNEEB", "v.MANAGER", 200000],
    [3, "MARIA HASSAN", "ASSISTANT", 250000],
    [4, "AYSHA", "COMPUTER OPERATOR", 400000],
    [5, "ROHAN", "PS", 50000],
    [6, "ABDULLAH", "DRIVER", 25000],
    [7, "JEO", "CLEANER", 30000],
    [8, "HASSAN", "CEO", 5000000000],
    [9, "KASIF", "DILEVERY BOY", 5000000],
    [1, "MUNEEB HASSAN", "MANAGER", 5000000],
    [2, "MALAIKAH MUNEEB", "v.MANAGER", 200000],
    [3, "MARIA HASSAN", "ASSISTANT", 250000],
    [4, "AYSHA", "COMPUTER OPERATOR", 400000],
    [5, "ROHAN", "PS", 50000],
    [6, "ABDULLAH", "DRIVER", 25000],
    [7, "JEO", "CLEANER", 30000],
    [8, "HASSAN", "CEO", 5000000000],
    [9, "KASIF", "DILEVERY BOY", 5000000],
];


#MULTIDIMENTIONAL ARRAY WITH FOR-LOOP
// for ($row=0; $row < 9 ; $row++) { 
//     for ($col= 0; $col < 4  ; $col++) { 
//         echo $emp[$row][$col] . " ";
//     }
// echo "<br>";
// }


#MULTIDIMENTIONAL ARRAY WITH FOREACH-LOOP
echo "<table border = '1px' cellpadding='5px' cellspacing = '0'>";
echo "<tr>
<th>Emp no.</th>
<th>Emp Name</th>
<th>Designation</th>
<th>Salary</th>
</tr>";
foreach ($emp as $v1) {
    echo "<tr>";
    foreach ($v1 as $v2) {
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}
echo "</table>";
