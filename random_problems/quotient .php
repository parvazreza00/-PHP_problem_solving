<?php
    # Write your PHP code from here
    //find out the quotient 
    $input = trim(fgets(STDIN));
    list($num1, $num2) = explode(' ', $input);
    $quotient = $num1 / $num2;
    echo floor($quotient)
    
?>