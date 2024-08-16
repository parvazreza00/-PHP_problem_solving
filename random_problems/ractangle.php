<?php
    # Write your PHP code from here
    //find out the ractangle area
    $input = trim(fgets(STDIN));
    list($width, $height) = explode(' ', $input);
    $rectangle_area = $width * $height;
    echo $rectangle_area;
    
?>