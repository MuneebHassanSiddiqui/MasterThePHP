<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGE FORM</title>
</head>

<body>
    <form action="$_server.php" method="post">
        NAME : <input type="text" name="fname"><br>
        AGE : <input type="text" name="age"><br>
        <input type="submit" name="save">
    </form>

    <?php
    if (isset($_POST['save'])) {
        echo "<ul>";
        echo  "<li>NAME :  " .  $_POST["fname"] . "</li>";
        echo "<li>AGE :  " . $_POST["age"] . "</li>";
        echo "</ul>";
    }
    echo "SERVER_NAME OR POST NAME  : " . $_SERVER['PHP_SELF']  . "<br>" . "PORT_NAME : " . $_SERVER['SERVER_PORT'];

    ?>
</body>

</html>