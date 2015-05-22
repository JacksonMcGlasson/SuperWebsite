<?php

$urls = array('http://localhost/Super-Website/gallery.php', "http://localhost/Super-Website/article1.php",
    "http://localhost/Super-Website/article2.php", "http://localhost/Super-Website/article3.php"); //specify array of possible URLs
$rand = rand(0, count($urls) - 1); //get random number between 0 and array length
$location = $urls[$rand]; //get random item from array
header('HTTP/1.1 301 Moved Permanently'); //send header
header('Location: ' . $location);

