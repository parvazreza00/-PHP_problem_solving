<?php
    # Write your PHP code from here
    //find out the average from 3 numbers
    $input = trim(fgets(STDIN));
    list($num1, $num2, $num3) = explode(' ', $input);
    $sum = (float)$num1 + (float)$num2 + (float)$num3;
    // echo $sum;
    $average = $sum / 3;
    echo "Average: ".number_format($average, 2);

    
?>