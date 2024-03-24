<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASICS WEBSITE</title>
    <link rel="stylesheet" href="allfiles/style.css"> <!-- Link to external CSS file -->
</head>

<body>
    <?php include('allfiles/sidebar.php'); #This function help us to short our code  
    ?>
    <?php include('allfiles/nav.php'); #This function help us to short our code  
    ?>
    <div class="content">
        <h1>INCLUDE & REQUIRE STATEMENT!</h1>
        <p>This is some introductory content about our website. Feel free to explore!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed faucibus, metus nec pretium fermentum, odio
            magna faucibus lectus, eu rutrum enim ipsum sed metus. Sed finibus vel nunc eget faucibus. Vestibulum eget
            nisi quis tortor hendrerit vehicula. Mauris euismod lorem id convallis ultricies. Donec feugiat felis sit
            condimentum. Quisque vel felis a libero aliquam malesuada. Donec
            volutpat, justo vel consequat tincidunt, orci dolor ultricies leo, a lacinia tortor risus eget nunc.</p>
        <p>Nulla facilisi. Suspendisse potenti. Duis nec mauris nec metus convallis mattis. Duis a eros vel purus
            egestas lobortis. Fusce eget erat vel turpis scelerisque blandit nec ut sapien. Integer placerat justo sit
            vel dolor lacinia vestibulum. Nulla facilisi. Donec ac metus consequat, efficitur
            risus id, finibus nunc.</p>
    </div>
    <div class="image-container">
        <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg" alt="Image">
    </div>
    <?php require('allfiles/footer.php'); #when the query is wrong all the code are not working
    ?>
</body>

</html>