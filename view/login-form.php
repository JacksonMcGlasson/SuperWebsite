<?php
//gets info from other page
require_once (__DIR__ . "/../model/config.php");
?>

<h1>Login</h1>

<form method="post" action="<?php echo $path . "controller/login-user.php"; ?>">
    <!--input for username-->
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username"/>
    </div>
    <!--input for password-->
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password"/>
    </div>
    <!--submit button-->
    <div>
        <button type="submit">Submit</button>
    </div>
</form>