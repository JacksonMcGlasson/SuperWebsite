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
        <title>Super Web Site Of Lists</title>
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
//if the user is logged in they can access the  logout
        if (authenticateUser()) {
            require_once (__DIR__ . "/view/navigation.php");
        }
        require_once (__DIR__ . "/view/footer.php");
        ?>
        <div class="container"> 
            <div class="row">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-xs-2"> <h1> 10 Great Video Game Sound Tracks </h1>
                        </div>
                        <div class="col-xs-10">
                            <!-- search bar code-->
                            <form  method="post" action="search.php?go"  id="searchform"> 
                                <input  type="text" name="name"> 
                                <input  type="submit" name="submit" value="Search"> 
                            </form> 
                            <!-- button that sends you to a random page-->
                            <button id='random'><a href="http://localhost/Super-Website/random.php">Random Page</a></button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2">
                        </div>
                        <div class="col-xs-10"> 
                            <h3>Here are some good sound tracks from video games i like.</h3>
                            <p>1.Skyrim<br />
                                <br />
                            </p> 
                            <!--videos of game sound tracks-->
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/aQeIYVM3YBM" frameborder="0" allowfullscreen></iframe>
                            <p>2 & 3.Halo 3 & 4<br />
                                <br />
                            </p>  
                            <!--videos of game sound tracks-->
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/eIyQVP3IUyg" frameborder="0" allowfullscreen></iframe>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/o7_FPx_H7sc" frameborder="0" allowfullscreen></iframe>
                            <p>4.Portal 2<br />
                                <br />
                            </p> 
                            <!--videos of game sound tracks-->
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/ZHSX9_pLwc8" frameborder="0" allowfullscreen></iframe>
                            <p>5.Assassins Creed IV: Black Flag<br />
                                <br />
                            </p> 
                            <!--videos of game sound tracks-->
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/eXZ6pWh19mI" frameborder="0" allowfullscreen></iframe>
                            <p>6.Half Life 2<br />
                                <br />
                            </p> 
                            <!--videos of game sound tracks-->
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/Xt2sbtvBuk8" frameborder="0" allowfullscreen></iframe>
                            <p>7.Destiny<br />
                                <br />
                            </p> 
                            <!--videos of game sound tracks-->
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/EvwDiV2K_0g" frameborder="0" allowfullscreen></iframe>
                            <p>8.Farcry 4<br />
                                <br />
                            </p> 
                            <iframe width="420" height="315" src="https://www.youtube.com/embed/UMTfwhW4Bsc" frameborder="0" allowfullscreen></iframe>
                            <p>9.Call of Duty Black Ops II<br />
                                <br />
                            </p>
                            <!--videos of game sound tracks-->
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/yn0MBBMcw8Y" frameborder="0" allowfullscreen></iframe>
                            <p>10.Batman Arkham Origins<br />
                                <br />
                            </p> 
                            <!--videos of game sound tracks-->
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/9a1EzSU_-UE" frameborder="0" allowfullscreen></iframe>

                        </div>

                    </div>
                    <div>
                        <h3>Lists and Gallery</h3>
                    </div>
                    <?php
                    //if logged in the user can access the list pages and gallery
                    if (authenticateUser()) {
                        require_once (__DIR__ . "/view/navigation2.php");
                    }
                    //if they are not this message will display
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


