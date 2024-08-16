<?php
    # Write your PHP code from here
    //find the diff between two numbers;
    
    $input = trim(fgets(STDIN));
    list($num1, $num2) = explode(' ', $input);
    $difference = $num1 - $num2;
    echo $difference;
    
?>