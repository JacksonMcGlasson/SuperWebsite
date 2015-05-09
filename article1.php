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

        ;
        if (authenticateUser()) {
            require_once (__DIR__ . "/view/navigation.php");
        }
        require_once (__DIR__ . "/view/footer.php");
        ?>
        <div class="container"> 
            <div class="row">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-xs-2"> <h1> 10 Wierd Stories</h1>
                        </div>
                        <div class="col-xs-10">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2">
                        </div>
                        <div class="col-xs-10"> 
                            <h3>These are 10 wierd stories that caught attention</h3>
                            <p>1.Thief steals a fridge from a gas station<br />
                                <br />
                                 A man walked in to a gas station convenience store at 4:09am April 2 and noticed that the<br />
                               the clerk was asleep. He then decided he would take 15 minutes to pry an ice cream freezer from the wall<br />
                               and take it with him. he was arrested a few days later.</p> 
                            <img src="http://media.skynews.com/media/images/generated/2015/4/24/386933/default/v1/fridgees-1-762x428.jpg">
                            <p>2.Something<br />
                                <br />
                               something is something</p> 
                            <p>3.Something<br />
                                <br />
                               something is something</p> 
                            <p>4.Something<br />
                                <br />
                               something is something</p> 
                            <p>5.Something<br />
                                <br />
                               something is something</p> 
                            <p>6.Something<br />
                                <br />
                               something is something</p> 
                            <p>7.Something<br />
                                <br />
                               something is something</p> 
                            <p>8.Something<br />
                                <br />
                               something is something</p>
                            <p>9.Something<br />
                                <br />
                               something is something</p> 
                            <p>10.Something<br />
                                <br />
                               something is something</p> 
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


