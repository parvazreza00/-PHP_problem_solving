<?php
    # Write your PHP code from here
    // swapping 
    $input = trim(fgets(STDIN));
    list($num1, $num2) = explode(' ', $input);
    echo "Before swapping: num1 = $num1, num2 = $num2 \n";
    $temp = 0;
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;
    echo "After swapping: num1 = $num1, num2 = $num2";
    
?>