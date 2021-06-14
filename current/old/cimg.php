<?php
    # CAPDCHA image generator.
    # Crude job done at Antariksh's "request"
    # Takes in two numbers, that will be printed, along with a plus sign between them
    
    session_start();
    
    header("Content-type: image/png");
    
    $image = imagecreate(40, 20);
    $bgcolor = imagecolorallocate($image, 255, 255, 255);
    $textcolor = imagecolorallocate($image, 0, 110, 0);
    imagestring($image, 5, 0, 0, $_SESSION["n1"]."  ".$_SESSION["n2"], $textcolor);
    
    imagepng($image);
    imagedestroy($image);
?>