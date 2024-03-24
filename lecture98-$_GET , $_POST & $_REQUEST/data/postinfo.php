<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<table border=2px; cellpadding=10px; cellspacing=0px >
<th>keys</th>
<th>Values</th>
";
foreach ($_POST as $key => $value) {
    echo "<tr>";
    echo "<td><b>$key</b></td>
          <td>$value</td>";
}
echo "</tr>";
echo "</table>";
