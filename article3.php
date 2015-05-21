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
                        <div class="col-xs-2"> <h1> 10 Recent Animal Extinctions </h1>
                        </div>
                        <div class="col-xs-10">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2">
                        </div>
                        <div class="col-xs-10"> 
                            <h3>Here is a list of animal's that became extinct relatively recently thanks to humans. Feel bad.</h3>
                            <p>1.Baiji River Dolphin<br />
                                <br />
                                 As China industrialized and started to use the rivers more, this dolphin started dying.Waste flowed into the river,
                               and parts of it were replaced with concrete. Excessive boat travel and dangerous fishing techniques killed them quickly
                               in the 70's and 80's. They became officially extinct after not a single one could be found in 2006.</p> 
                            <img src="http://i0.wp.com/listverse.com/wp-content/uploads/2009/07/baiji-tm.jpg?resize=400%2C213">
                            <p>2.Javan Tiger<br />
                                <br />
                                 In the early 19th century, the Javan Tiger was so common it was considered a pest. As human population increased their
                               habitat was cleared for farmland. They were hunted down and poisoned to make room. They disappeared between the 1970's
                               and 80's.
                                 </p>  
                            <img src="http://i2.wp.com/listverse.com/wp-content/uploads/2009/07/javan_tiger-tm.jpg?resize=400%2C273g">
                            <p>3.Golden Toads<br />
                                <br />
                                 The golden toad was first discovered in 1966. By 1990 they all disappeared. It lived in Costa Rica and there numbers were
                               pretty steady until 1987. Because of strange weather, only 29 out of a possible 30,000 toads were born. That number just 
                               trickled down over the next few years.</p> 
                            <img src="http://i1.wp.com/listverse.com/wp-content/uploads/2009/07/img_18.jpg">
                            <p>4.Expensive Toilets<br />
                                <br />
                                 People sometimes think that if something is owned by a celebrity it needs to be sold for a lot of
                               money. In some cases, people want to buy celebrity toilets for a large cash sum. One of John Lennon's toilets 
                               sold for 9,500 pounds(about $14,740) at an auction. Someone also decided to open bids on the toilet of J.D Salinger,
                               an author. the bids started at 1 million dollars because the dealer said "who knows how  many of Salinger's stories
                               were thought up and written while he sat on this throne!" These sound like great ways to spend your money.</p> 
                            <img src="http://blog-images.homethangs.com/2011/10/FloWise-Dual-Flush-Elongated-Toilet1-300x300.jpg">
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


