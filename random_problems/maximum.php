<?php
    # Write your PHP code from here
    //find out the maximum value from the 3 number;
    $input = trim(fgets(STDIN));
    list($num1, $num2, $num3) = explode(' ', $input);
    if($num1 > $num2 && $num1 > $num3){
        echo $num1;
    }elseif($num2 > $num1 && $num2 > $num3){
        echo $num2;
    }else{
        echo $num3;
    }
    
?>