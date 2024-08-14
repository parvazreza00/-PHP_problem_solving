<?php
    # Write your PHP code from here
//find out the reminder
    $input = trim(fgets(STDIN));
    list($num1, $num2) = explode(" ", $input);
    $reminder = $num1 % $num2;
    echo $reminder;
    
?>