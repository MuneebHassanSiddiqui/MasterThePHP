<?php

echo "<h1>NESTED  LOOP</h1>";
echo "<table border = '1px' cellpadding='5px' cellspacing = '0'>";
for ($i = 10; $i <= 1000; $i+=10) {
    echo "</tr>";
    for ($a=$i; $a < $i + 10; $a+=10) { 
        echo  "<td>$a</td>";
    }
    echo"<tr>";
}
echo "</table>";
