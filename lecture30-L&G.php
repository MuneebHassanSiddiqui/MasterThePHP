<?php

$x = 10;
function test()
{
    global $x;
    echo "Variable X inside function : $x <br> ";
}
test();
echo "Variable X outside function : $x  <br> ";



$n = 20;
$m = 30;
function plus()
{
    global $n, $m;
    $n += $m;
}
plus();
echo $n;
