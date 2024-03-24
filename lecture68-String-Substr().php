<?php

echo "<h1>String-Substr() Function</h1>";
echo "<ul><li><h2> 1)Substr() Function =>positive numerics value</h2></li></ul>";

$lorem = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, eligendi!";
$lorem1 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nobis suscipit eius. Nihil expedita iste quas cupiditate totam aspernatur obcaecati. Ab debitis at necessitatibus esse facilis fugit velit sunt consectetur dolore ullam tempore ducimus quod explicabo libero, molestiae non maiores reiciendis adipisci odit dicta ea earum eaque deleniti voluptatum. Id, nihil. Sit nobis quis aliquam ipsam molestias, facere corrupti dolor. Minima aspernatur eos autem vel, possimus ducimus porro ut odio officia quas doloremque magnam ad deserunt voluptatibus doloribus saepe harum qui deleniti odit totam ipsum. Dolore consequatur quia labore, dicta soluta adipisci aliquid quisquam eos ad. Laborum tempora sunt ducimus.";


echo " <ul><li>SUBSTR : " . substr($lorem, 0, 10) . "</li></ul>";
echo "<h1>String-Substr() Function</h1>";
echo "<ul><li><h2> 1)Substr() Function =>negative numerics value</h2></li></ul>";

echo " <ul><li>SUBSTR : " . substr($lorem1, 0, -10) . "</li></ul>";
