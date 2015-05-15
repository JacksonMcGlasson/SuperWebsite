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
                        <div class="col-xs-2"> <h1>Main Page</h1>
                        </div>
                        <div class="col-xs-10">
                            <img id="halo" class="img-responsive img-circle" src="">
                        </div><!--halo picture-->
                    </div>
                    <div class="row">
                        <div class="col-xs-2">
                        </div>
                        <div class="col-xs-10"> 
                            <h3>This is a web site of many lists. </h3>
                            <p>This a web site of lists. You will find many different lists than may be informative or enertaining.
                                These lists will tell stories or present interesting facts for users to read.</p> 

                        </div>
                        <button id='random'>Random Page</button>
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
