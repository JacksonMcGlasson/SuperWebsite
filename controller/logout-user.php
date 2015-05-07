<?php
//getting information from other page
require_once (__DIR__ . "/../model/config.php");
//deletes session variable, logging th user out
unset($_SESSION["authenticated"]);
//destroys session
session_destroy();
//redirects user to index.php
header("Location:" . $path . "index.php");
