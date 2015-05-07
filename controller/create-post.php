<?php
//getting information from other pages
require_once (__DIR__ . "/../view/header.php");
require_once (__DIR__ . "/../model/config.php");
require_once (__DIR__ . "/../view/footer.php");

//filters the title and post data
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

//inserts post into post table and sets a title to = the title variable 
//and sets the post to = the post variable
$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
//checks if the query works
if ($query) {
    echo "<p>Successfully inserted post : $title</p>";
} else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}