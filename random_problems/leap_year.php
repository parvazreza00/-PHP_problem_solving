<?php
    # Write your PHP code from here
    //leap year check
    $input = trim(fgets(STDIN));
    if(($input % 4 == 0 && $input % 100 != 0) || ($input % 400 == 0)){
        echo "$input is a leap year.";
    }else{
        echo "$input is not a leap year.";
    }
    
?>