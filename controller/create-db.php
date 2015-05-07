<?php
//getting information from other page
require_once (__DIR__ . "/../model/config.php");

//creates table or users
$query = $_SESSION["connection"]->query("CREATE TABLE users("
        . "id int(11) NOT NULL AUTO_INCREMENT,"
        . "username varchar(30) NOT NULL, "
        . "email varchar(50) NOT NULL,"
        . "password char(128) NOT NULL,"
        . "salt char(128) NOT NULL,"
        . "PRIMARY KEY (id))");
//checks if query was successfully created
if ($query) {
    echo "Succesfully created table: users";
} else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}