<?php

$cookie_name = "user";
$cookie_value = " <marquee behavior='' direction='top'><mark>YOUR SET COOKIE IS SUCESSFULLY RUNNING</mark></marquee>
<marquee behavior='' direction='left'><mark>YES YOU THE MAKE THE BASIC PROGRAM</mark></marquee>";

setcookie($cookie_name, $cookie_value, time() + (60), "/");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "cookie not set ";
    } else {
        echo  $_COOKIE[$cookie_name];
    }
    ?>

</body>

</html>