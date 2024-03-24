<?php
echo "<h1>MKTIME() FUNCTION</h1>";
echo "OLD TIME =>" . date("h:i:sa", mktime(0, 0, 0, 11, 29, 2006)) . "<br>";
echo  "DAYS =>" .  date("D", mktime(0, 0, 0, 11, 29, 1800)) . "<br>";

echo "<h1>GMMKTIME() FUNCTION</h1>";
echo "OLD TIME =>" . date("l", gmmktime(0, 0, 0, 11, 24, 1994)) . "<br>";
echo  "DAYS =>" .  date("D",  gmmktime(0, 0, 0, 11, 1, 2005)) . "<br>";
