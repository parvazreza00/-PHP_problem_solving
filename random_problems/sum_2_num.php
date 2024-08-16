<?php
    # Write your PHP code from here
    //sum of two integer number
    $input =  trim(fgets(STDIN));
    list($num1, $num2) = explode(' ', $input);
    $sum = $num1 + $num2;
    echo $sum;
    
?>