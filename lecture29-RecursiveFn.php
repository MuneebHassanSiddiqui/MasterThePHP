<?php

echo "<h1>FACTORAIL NUMBER</h1>";

function factorail($n)
{
    if ($n == 0) {
        return 1;
    } else {
        return ($n * factorail($n - 1));
    }
}


echo factorail(0);
