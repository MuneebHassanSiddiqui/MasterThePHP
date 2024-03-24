<?php

echo "<h1>String-Stip_tag() & Word_wrap() FUNCTION</h1>";

echo "<ul><li><h2>Stip_tag() FUNCTION</h2></li></ul>";


$str = "<b>HELLO!</b>   <i>MUHAMMAD MUNEEB HASSAN</i>  HOW ARE YOU??";
echo strip_tags($str, "<b>");



echo "<ul><li><h2>Word_wrap() FUNCTION</h2></li></ul>";


$str1 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, nam. Quas voluptas placeat rem. Id eveniet voluptatum nihil fugit, porro suscipit aut sit dolores, eius modi minus rerum voluptate tempora vel molestias temporibus mollitia eligendi enim nemo. Quasi, culpa dicta!";

echo wordwrap($str1, 20, "<br>");
