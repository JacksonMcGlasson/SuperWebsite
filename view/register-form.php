<?php
//getting information from other page
require_once (__DIR__ . "/../model/config.php");
?>

<h1>Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
    <div><!--where you input your email-->
        <label for="email">Email: </label>
        <input type="text" name="email"/>
    </div>
    <div><!--where you input your username-->
        <label for="username">Username: </label>
        <input type="text" name="username"/>
    </div>
    <div><!--where you input your password-->
        <label for="password">Password: </label>
        <input type="password" name="password"/>
    </div>
    <div><!--submit button-->
        <button type="submit">Submit</button>
    </div>
</form>