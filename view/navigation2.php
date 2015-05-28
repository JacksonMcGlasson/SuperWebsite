<?php
require_once (__DIR__ . "/../model/config.php");
?>
<!--links that go to the blog post form and logs out people -->
<nav>

    <ul>
        <!--button that takes users to a random page-->
        <button id='random'><a href="http://localhost/Super-Website/random.php">Random Page</a></button>
        <!--link to gallery-->
        <li><a href="<?php echo $path . "gallery.php"; ?>">Gallery</a></li>
        <!--link to first article-->
        <li><a href="<?php echo $path . "article1.php"; ?>">10 Weird Stories</a></li>
        <!--link to second article-->
        <li><a href="<?php echo $path . "article2.php"; ?>">7 Recent Animal Extinctions </a></li>
        <!--link to third article-->
        <li><a href="<?php echo $path . "article3.php"; ?>">10 Great Video Game Sound Tracks </a></li>
        <!--link to fourth article-->
        <li><a href="<?php echo $path . "article4.php"; ?>">Another List </a></li>

    </ul>
</nav>