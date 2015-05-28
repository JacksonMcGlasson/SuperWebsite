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
                        <div class="col-xs-2"> <h1> 7 Recent Animal Extinctions </h1>
                        </div>
                        <div class="col-xs-10">
                            <!-- search bar code-->
                            <form  method="post" action="search.php?go"  id="searchform"> 
                                <input  type="text" name="name"> 
                                <input  type="submit" name="submit" value="Search"> 
                            </form> 
                            <!-- button tht sends you to a random page-->
                            <button id='random'><a href="http://localhost/Super-Website/random.php">Random Page</a></button>
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
                            <p>4.Passenger Pigeon<br />
                                <br />
                                200 years ago, the passenger pigeon was the most common bird in North America. They flew in flocks that could number in billions.
                                Pigeon meat started to be advertised as cheap food. Slaves and the poor ate them a lot. This led to a massive hunting campaign. Farmers 
                                thought they were threats because of their numbers. The last passenger died in a zoo on September 1,1914.
                            </p> 
                            <img src="http://i2.wp.com/listverse.com/wp-content/uploads/2009/07/passengerpigeon.jpg">
                            <p>5.Quagga<br />
                                <br />
                                The quagga was a subspecies of zebra. It had stripes only on its head, neck and chest. The last wild quaggas were caught by 1870.
                                the very last quagga died in a zoo in 1883. However, people did not know they were extinct; people indiscriminately called anytype of
                                zebra a quagga. It went extinct because of ruthless hunting.</p> 
                            <img src="http://i1.wp.com/listverse.com/wp-content/uploads/2009/07/quagga_photo.jpg">
                            <p>6.Thyacline<br />
                                <br />
                                The Thyacline or Tasmanian tiger was the largest carnivorous marsupial. They were wiped out because of constant hunting. They were hunted 
                                down because they attacked sheep. People also started settling on their habitat. It was only recognized as being endangered the year the last 
                                one died. It died because it was locked outside in its zoo pen and froze to death.</p> 
                            <img src="http://i2.wp.com/listverse.com/wp-content/uploads/2009/07/picture-1-112.png">
                            <p>7.West African Black Rhino<br />
                                <br />
                                The rarest of the black rhino subspecies, the West African black rhinoceros is currently recognized as "critically endangered," but researchers
                                fear it may be extinct. The species was once widespread in central Africa, but the population has been in decline due to poaching. By 1980, the 
                                population was in the hundreds, and by 2000 only an estimated 10 rhinos remained. A survey of the animal's last remaining habitat in northern Cameroon 
                                failed to find any of the rhinos, but search efforts continue. No West African black rhinos are known to be held in captivity.</p> 
                            <img src="http://media.mnn.com/sites/default/files/styles/featured_blog/public/rhino_2.jpg">

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


