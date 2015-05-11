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
                                 A man walked in to a gas station convenience store at 4:09am April 2 and noticed that the
                               clerk was asleep. He then decided he would take 15 minutes to pry an ice cream freezer from the wall
                               and take it with him. He was arrested a few days later. Not many people would steal such an unvaluable
                               thing.</p> 
                            <img src="http://media.skynews.com/media/images/generated/2015/4/24/386933/default/v1/fridgees-1-762x428.jpg">
                            <p>2.Very incompetent thief<br />
                                <br />
                                 If that last one was not entertaining enough here is another story about a thief.
                               A man named Jamie Brown stole a fish tank from a hardware store that he was banned from.
                               While he was running from the cops he decided to stop to urinate in a bush. Unfortunately for him,
                               there was wasps nest in the bush. He then had to be rescued by the police and spend six unpleasant 
                               hours in the hospital.</p>  
                            <img src="http://static.socialitelife.com/uploads/2013/01/24/stephen-dorff-peeing-bushes-01242013-05-435x580.jpg">
                            <p>3.Omelet accident<br />
                                <br />
                                 Three tractor trailers crashed on an interstate in Chattanooga, Tennessee. Out of each truck
                               spilled a load of eggs, pallets of cheese, and boxes of meat. This created a giant omelet on 
                               the highway.It took hours to clean up.</p> 
                            <img src="http://wac.450f.edgecastcdn.net/80450F/999ktdy.com/files/2012/06/Eggs.png">
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


