<?php
echo"<h1>PHP LOGICAL OPERATOR</h1>";


$a = 100;
$b = 100;

// && / AND operator

if ($a > 90 && $b < 200) {
    echo "BOTH CONDITION ARE TRUE <br>";
}

#OR & || OPERATOR
if ($a >= 100 || $b >= 10) {
    echo "ONE CONDITION ARE TRUE <br>";
}

# ! & NOT OPERATOR 
if (!($a <= 90)) {
    echo "MUNICODE . <br>";
}
if (!($a <= 90)) {
    echo "MUNICODE . <br>";
}

#XOR OPERATOR ON CONDITION MUST BE FALSE 
$age = 25;

if ($age >= 18 xor $age <= 21) {
    echo "YO ARE ELIGIBLE . <br>";
}
