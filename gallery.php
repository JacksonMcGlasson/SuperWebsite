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

