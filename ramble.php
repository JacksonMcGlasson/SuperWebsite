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
                        <div class="col-xs-2"> <h1> Ramble </h1>
                        </div>
                        <div class="col-xs-10">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2">
                        </div>
                        <div class="col-xs-10"> 
                            <h3>This is going to be a very rambly ramble.</h3>
                            <p>A ramble upon rambles<br />
                                <br />
                                 Today i can not find a way to search my site. I am  stressed out. This is stupid. Why does nothing work? What did i do
                            to deserve this? I think that i need to figure this out or something because im not even sure if today is the day or if some other random 
                            day is the day i figure this out. sometimes when you find yourself stuck you do things that are a waste of time. that is what this is. I 
                            know that i should continue searching the endless web for an answer but i am very tired of doing that. Why wont you help me google?
                            What did I do to you? Just give me the answer to my problems already google. If you don't you can just leave, you untrustworthy cryptic guy.
                            Why? How? When? Where? these are questions i need answers to with this project. I can't find them . Someone once said this: Apples before cereal
                            deal every flipping game has income jailed, killed like man never over powered quack restless sorry television under view with xylophones, yaks, zebras.
                            </p> 
                            
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


