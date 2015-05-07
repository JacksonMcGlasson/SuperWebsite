<?php
//gets info from other pages
require_once (__DIR__ . "/../model/config.php");
require_once (__DIR__ . "/../controller/login-verify.php");
//if the user is not authentic they are sent back to the index
if (!authenticateUser()) {
    header("Location:" . $path . "index.php");
    die();
}
?> 


<h1>Create Blog Post</h1>
<!-- form for blog posts-->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
    <div><!--where you input the title-->
        <label for="title">Title: </label>
        <input type="text" name="title" />
    </div>
    <div><!--where you input the actual post body-->
        <label for="post">Post: </label>
        <textarea name="post"></textarea>
    </div>
    <div><!--the button to submit the info to the database-->
        <button type="submit">Submit</button>
    </div>
</form>