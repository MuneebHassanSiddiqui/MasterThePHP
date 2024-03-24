<?php
if (isset($_FILES['image'])) {
    $file_name = $_FILES['image']['name'];
    $file_type = $_FILES['image']['type'];
    $file_temp = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];

    $allowed_type = ['image/png', 'image/jpg', 'image/gif'];

    if (!in_array($file_type, $allowed_type)) {
        echo "Error: Only JPEG, PNG, and GIF files are allowed.";
    }
}

if (move_uploaded_file($file_temp, "uploadedfiles/" . $file_name)) {
    echo "File uploaded successfully.";
} else {
    echo "Error: File upload failed.";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="fileuploaded.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image"><br><br>
        <input type="submit" value="submit">
    </form>
</body>

</html>