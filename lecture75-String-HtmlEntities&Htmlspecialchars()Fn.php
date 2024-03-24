<?php

echo "<h1>String-HtmlEntities&Htmlspecialchars()Fn</h1>";

echo "<ul><li><h2> 1)HtmlEntities Function</h2></li></ul>";
$str = "MUNIB IS A'noob' <b>CODER</b>";
$str1 = '<a href="https://hamariweb.com/islam/karachi_prayer-timing1.aspx">HAMARI WEB</a>';

// echo $str1 . "<br>";

$ent = htmlentities($str) . "<br><br>";
echo htmlentities($str1, ENT_COMPAT) . "<br><br>"; //default value
echo htmlentities($str1, ENT_NOQUOTES) . "<br><br>"; //"",'' never be converted
echo htmlentities($str1, ENT_QUOTES) . "<br><br>"; //"",'' must be converted
echo $ent . "<br>";

echo "<h2>DECODE Function</h2>";
html_entity_decode($ent); //this function is used to decode any character


echo "<ul><li><h2> 2)Htmlspecialchars Function</h2></li></ul>";
$web = '<a href="https://hamariweb.com/islam/.aspx">Htmlspecialchars Function</a>';

// echo htmlspecialchars($web, ENT_NOQUOTES) . '<br>';
// echo htmlspecialchars($web, ENT_QUOTES) . '<br>';
$ent1 = htmlspecialchars($web, ENT_COMPAT) . '<br>'; //default value.. 
echo $ent1 . '<br>';

echo "<h2>DECODE Function</h2>";
echo htmlspecialchars_decode($ent1) . '<br>';

echo "<ul><li><h2> 2)TABLE OF SPECIAL CHARACTER Function=>this is function only use to see table of specailcharacters</h2></li></ul>";
$array = get_html_translation_table(HTML_SPECIALCHARS);
// print_r($array);
echo "<ul><li><h2> HTML_SPECIALCHARS </h2></li></ul>";
echo "<table border='1px' cellpadding='10px' cellspacing='0'>";
echo "<th>KEYS</th>
      <th>VALUES</th>";
foreach ($array as $key => $value) {

    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td>$value</td>";
}
echo "</tr>";
echo "</table>";

$array1 = get_html_translation_table(HTML_ENTITIES);
// print_r($array);
echo "<ul><li><h2> HTML_ENTITIES </h2></li></ul>";
echo "<table border='1px' cellpadding='10px' cellspacing='0'>";
echo "<th>S.NO</th><th>KEYS</th>
      <th>VALUES</th>";
$count = 0;
foreach ($array1 as $key => $value) {

    echo "<tr>";
    echo "<td>$count </td>";
    echo "<td>$key</td>";
    echo "<td>$value</td>";
    $count += 1;
}
echo "</tr>";
echo "</table>";
