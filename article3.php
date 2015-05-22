<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Super-Website</title>
        <link type="text/css" rel="stylesheet" href="css/custom-style.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link type="text/css" href="css/jquery-ui-1.11.2.custom" rel="Stylesheet" />
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    </head>
    <body>
        <?php
        require_once (__DIR__ . "/controller/login-verify.php");
        require_once (__DIR__ . "/view/header.php");
//if the user is logged in they can access the blog post form
        if (authenticateUser()) {
            require_once (__DIR__ . "/view/navigation.php");
        }
        require_once (__DIR__ . "/view/footer.php");
        ?>
        <div class="container"> 
            <div class="row">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-xs-2"> <h1> Another List </h1>
                        </div>
                        <div class="col-xs-10">
                            <form  method="post" action="search.php?go"  id="searchform"> 
                                <input  type="text" name="name"> 
                                <input  type="submit" name="submit" value="Search"> 
                            </form> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2">
                        </div>
                        <div class="col-xs-10"> 
                            <h3>Another List</h3>
                            <p>1.Something<br />
                                <br />
                                something is something</p> 
                            <img src="http://sacobserver.com/wp-content/uploads/2012/08/coming-soon.jpg">
                            <p>2.Something<br />
                                <br />
                                something is something
                            </p>  
                            <img src="http://sacobserver.com/wp-content/uploads/2012/08/coming-soon.jpg">
                            <p>3.Something<br />
                                <br />
                                something is something</p> 
                            <img src="http://sacobserver.com/wp-content/uploads/2012/08/coming-soon.jpg">
                            <p>4.Something<br />
                                <br />
                                something is something</p> 
                            <img src="http://sacobserver.com/wp-content/uploads/2012/08/coming-soon.jpg">
                            <p>5.Something<br />
                                <br />
                                something is something</p> 
                            <img src="http://sacobserver.com/wp-content/uploads/2012/08/coming-soon.jpg">
                            <p>6.Something<br />
                                <br />
                                something is something</p> 
                            <img src="http://sacobserver.com/wp-content/uploads/2012/08/coming-soon.jpg">
                            <p>7.Something<br />
                                <br />
                                something is something</p> 
                            <img src="http://sacobserver.com/wp-content/uploads/2012/08/coming-soon.jpg">
                            <p>8.Something<br />
                                <br />
                                something is something</p>
                            <img src="http://sacobserver.com/wp-content/uploads/2012/08/coming-soon.jpg">
                            <p>9.Something<br />
                                <br />
                                something is something</p> 
                            <img src="http://sacobserver.com/wp-content/uploads/2012/08/coming-soon.jpg">
                            <p>10.Something<br />
                                <br />
                                something is something</p> 
                            <img src="http://sacobserver.com/wp-content/uploads/2012/08/coming-soon.jpg">
                        </div>

                    </div>
                    <div>
                        <h3>Lists and Gallery</h3>
                    </div>
                    <?php
                    if (authenticateUser()) {
                        require_once (__DIR__ . "/view/navigation2.php");
                    }
                    if (!authenticateUser()) {
                        echo "To see lists and gallery log in or register for an account";
                    }
                    ?>
                </div>
                <div class="col-md-2">
                </div>
            </div> 
        </div>
    </body>
</html>


