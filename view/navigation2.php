<?php
require_once (__DIR__ . "/../model/config.php");
?>
<!--links that go to the blog post form and logs out people -->
<nav>
    
    <ul>
        <button id='random'><a href="http://localhost/Super-Website/random.php">Random Page</a></button>
        <li><a href="<?php echo $path . "gallery.php"; ?>">Gallery</a></li>
        <li><a href="<?php echo $path . "article1.php"; ?>">10 Weird Stories</a></li>
        <li><a href="<?php echo $path . "article2.php"; ?>">7 Recent Animal Extinctions </a></li>
        <li><a href="<?php echo $path . "article3.php"; ?>">10 Great Video Game Sound Tracks </a></li>
        <li><a href="<?php echo $path . "article4.php"; ?>">Another List </a></li>
        
    </ul>
</nav>