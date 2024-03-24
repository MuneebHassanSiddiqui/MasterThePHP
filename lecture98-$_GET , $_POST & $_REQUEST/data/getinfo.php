<?php

echo "<pre>";
print_r($_GET);
echo "</pre>";
echo "<table border=2px; cellpadding=10px; cellspacing=0px >
<th>keys</th>
<th>Values</th>";
foreach ($_GET as $key => $value) {
    echo "<tr>";
    echo "<td>$key</td>
          <td>$value</td>";
}
echo "</tr>";
echo "</table>";
