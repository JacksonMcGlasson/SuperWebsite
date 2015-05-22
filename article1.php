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
                        <div class="col-xs-2"> <h1> 10 Weird Stories</h1>
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
                                there was a wasp's nest in the bush. He then had to be rescued by the police and spend six unpleasant 
                                hours in the hospital.</p>  
                            <p>3.Omelet accident<br />
                                <br />
                                Three tractor trailers crashed on an interstate in Chattanooga, Tennessee. Out of each truck
                                spilled a load of eggs, pallets of cheese, and boxes of meat. This created a giant omelet on 
                                the highway.It took hours to clean up.</p> 
                            <img src="http://wac.450f.edgecastcdn.net/80450F/999ktdy.com/files/2012/06/Eggs.png">
                            <p>4.Expensive Toilets<br />
                                <br />
                                People sometimes think that if something is owned by a celebrity it needs to be sold for a lot of
                                money. In some cases, people want to buy celebrity toilets for a large cash sum. One of John Lennon's toilets 
                                sold for 9,500 pounds(about $14,740) at an auction. Someone also decided to open bids on the toilet of J.D Salinger,
                                an author. the bids started at 1 million dollars because the dealer said "who knows how  many of Salinger's stories
                                were thought up and written while he sat on this throne!" These sound like great ways to spend your money.</p> 
                            <img src="http://blog-images.homethangs.com/2011/10/FloWise-Dual-Flush-Elongated-Toilet1-300x300.jpg">
                            <p>5.Elderly couple "trapped" in their car.<br />
                                <br />
                                On November 6, an elderly couple spent 13 hours in their new car assuming they were trapped.They had forgotten the key to 
                                the car and had also forgotten how to open it from the inside. When they were finally found they had to be taken
                                to the hospital. Unlike most people, they didn't know that the door opened manually from the inside. </p> 
                            <img src="http://41.media.tumblr.com/tumblr_lzp1ejCRUA1r834ato1_500.jpg">
                            <p>6.Penguin man of Belgium.<br />
                                <br />
                                Alfred Davis ,79, is known in Belgium as "Monsieur Pingouin"(Mr. Penguin). He took on the name after a car accident
                                left him with a waddle in his walk that he decided to fully embrace. When he officially changed his name, his wife left him
                                because she didn't want to be called Mrs. Penguin. However, he did not let that hold him back and he created a penguin-item
                                muesuem with 3,500 items. He also created a full body penguin outfit that he wears daily, waddling around Brussels.</p> 
                            <img src="https://metrouk2.files.wordpress.com/2012/05/article-1336231355220-12ed83ae000005dc-763244_466x487.jpg">
                            <p>7.Killing robots<br />
                                <br />
                                Some robotic devolopers have created some robots with a "taste" for blood. They created a clock which is powered by dead houseflies.
                                It takes 12 carcasses to power it for 12 days. The other invention is  a coffee table that catches mice. It lures them up 
                                the table legs with cheese into a hole in the center. once inside they are guillotined. Some find it worriying to give robots 
                                a taste for meat.</p> 
                            <img src="http://cdn.gajitz.com/wp-content/uploads/2011/04/microbial-fuel-cell-coffee-table.jpg">
                            <p>8.Cow injury<br />
                                <br />
                                On May 5, 2007 a man suffered an unfortunate accident. He was driving on a road in Austrailia when he accidently  his SUV into a cow in the 
                                road. The cow was thrown into the air and landed on the cars roof collapsed injuring the man. Somehow he survived.</p>
                            <img src="http://www.vaguebuttrue.com/images/1231908285-cow%20in%20car%202.jpg">
                            <p>9.Tree crocs<br />
                                <br />
                                In Florida some alligators an crocodile have new habits. They have started to climb trees. People are aafraid they will jump down from
                                the trees and attack. Now fishermen in the area have to keep an eye on the water and the trees.</p> 
                            <img src="http://www.vaguebuttrue.com/images/1394508417-tree-climbing-crocodileEDIT.jpg">
                            <p>10.Goose Revenge<br />
                                <br />
                                A flock of night flying geese took down a medical helicopter on a rescue mission to save a man. The guy who needed
                                to be rescued was a goose hunter. Because the geese took down the chopper, the goose hunter died.</p> 
                            <img src="http://www.vaguebuttrue.com/images/1232420720-goose%20in%20chopper%20WEBSITE.jpg">
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


