<?php
//getting information from other page
require_once (__DIR__ . "/../model/config.php");

//filters the username and password data
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

//selects the the salt and password from the users table wher the username matches the username variable
$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE BINARY username = '$username'");

//checks validility of login
if ($query->num_rows == 1) {
    $row = $query->fetch_array();
    if ($row["password"] === crypt($password, $row["salt"])) {
        $_SESSION["authenticated"] = true;
        echo "<p>Login Successful!</p>";
        //sends user to index page after logging in
        header("Location:" . $path . "index.php");
    } else {
        echo "<p>Invalid Username and Password!</p>";
    }
} else {
    echo "<p>Invalid Username and Password!</p>";
}
    
