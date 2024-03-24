<?php
$percent = 30;

if ($percent >= 80 && $percent <= 100) {
    echo "YOU ARE IN MERIT";
} elseif ($percent >= 60 && $percent <= 80) {
    echo "YOU ARE IN 1 DIVISION";
} elseif ($percent >= 45 && $percent <= 60) {
    echo "YOU ARE IN II DIVISION";
} elseif ($percent >= 33 && $percent <= 45) {
    echo "YOU ARE IN III DIVISION";
} elseif ($percent <= 33) {
    echo "YOU ARE FAIL";
} else {
    echo "please enter vaild email";
}
