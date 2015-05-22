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
                        <div class="col-xs-2"> <h1>Gallery</h1>
                        </div>
                        <div class="col-xs-10">
                            <form  method="post" action="search.php?go"  id="searchform"> 
                                <input  type="text" name="name"> 
                                <input  type="submit" name="submit" value="Search"> 
                            </form> 
                            <button id='random'><a href="http://localhost/Super-Website/random.php">Random Page</a></button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2">
                        </div>
                        <div class="col-xs-10"> 
                            <h3>These are the pictures from all the lists</h3>
                            <img src="http://blog-images.homethangs.com/2011/10/FloWise-Dual-Flush-Elongated-Toilet1-300x300.jpg">
                            <img src="http://wac.450f.edgecastcdn.net/80450F/999ktdy.com/files/2012/06/Eggs.png">
                            <img src="http://media.skynews.com/media/images/generated/2015/4/24/386933/default/v1/fridgees-1-762x428.jpg">
                            <img src="http://41.media.tumblr.com/tumblr_lzp1ejCRUA1r834ato1_500.jpg">
                            <img src="https://metrouk2.files.wordpress.com/2012/05/article-1336231355220-12ed83ae000005dc-763244_466x487.jpg">
                            <img src="http://cdn.gajitz.com/wp-content/uploads/2011/04/microbial-fuel-cell-coffee-table.jpg">
                            <img src="http://www.vaguebuttrue.com/images/1231908285-cow%20in%20car%202.jpg">
                            <img src="http://www.vaguebuttrue.com/images/1394508417-tree-climbing-crocodileEDIT.jpg">
                            <img src="http://www.vaguebuttrue.com/images/1232420720-goose%20in%20chopper%20WEBSITE.jpg">
                            <img src="http://i0.wp.com/listverse.com/wp-content/uploads/2009/07/baiji-tm.jpg?resize=400%2C213">
                            <img src="http://i2.wp.com/listverse.com/wp-content/uploads/2009/07/picture-1-112.png">
                            <img src="http://i2.wp.com/listverse.com/wp-content/uploads/2009/07/javan_tiger-tm.jpg?resize=400%2C273g">
                            <img src="http://i1.wp.com/listverse.com/wp-content/uploads/2009/07/img_18.jpg">
                            <img src="http://i2.wp.com/listverse.com/wp-content/uploads/2009/07/passengerpigeon.jpg">
                            <img src="http://i1.wp.com/listverse.com/wp-content/uploads/2009/07/quagga_photo.jpg">
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

