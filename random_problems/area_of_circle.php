<?php
    # Write your PHP code from here
    //area of circle
    $input = trim(fgets(STDIN));
    $input = (float)$input;
    $area = 3.14 * pow($input, 2);
    $area = number_format($area, 2, '.', '');
    echo "The area of the circle is $area square units.";

    
?>