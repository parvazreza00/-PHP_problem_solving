<?php
    # Write your PHP code from here
    $input = trim(fgets(STDIN));
    if($input>0){
        echo "$input is a positive number.";
    }elseif($input == 0){
        echo "The number is zero.";
    }else{
        echo "$input is a negative number.";
    }
    
?>