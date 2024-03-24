<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASICS WEBSITE</title>
    <link rel="stylesheet" href="allfiles/style.css"> <!-- Link to external CSS file -->
</head>

<body>
    <?php include_once('allfiles/slidebar.php'); #lets check the difference between include Function & Include_once function
    ?>
    <?php include_once('allfiles/slidebar.php');
    ?>

    <?php include('allfiles/nav.php');     ?>

    <?php include('allfiles/nav.php');     ?>
    <div class="content">
        <h1>INCLUDE_ONCE & REQUIRE_ONCE STATEMENT!</h1>
        <p>This is some introductory content about our website. Feel free to explore!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed faucibus,metus nec pretium fermentum, odio
            magna faucibus lectus, eu rutrum enim ipsum sed metus. Sed finibus vel
            volutpat, justo vel consequat tincidunt, orci dolor ultricies leo, a lacinia tortor risus eget nunc.</p>
        <p>Nulla facilisi. Suspendisse potenti. Duis nec mauris nec metus convallis
            egestas. In ultricies mi vel dolor lacinia vestibulum. Nulla facilisi. Donec ac metus consequat, efficitur
            risus id, finibus nunc.</p>
    </div>
    <div class="image-container">
        <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg" alt="Image">
    </div>
    <?php require_once('allfiles/footer.php'); //code cant be duplicate because you are using the include_ once & require_once statement 
    ?>
    <?php require_once('allfiles/footer.php');
    ?>
    <?php require_once('allfiles/footer.php');
    ?>
</body>

</html>