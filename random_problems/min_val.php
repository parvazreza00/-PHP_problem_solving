<?php
    # Write your PHP code from here
    //find out the minimum value between 3 numbers;
    
    $input = trim(fgets(STDIN));
    list($num1,$num2, $num3) = explode(' ',$input);
    if($num1<$num2 && $num1<$num3){
        echo $num1;
    }elseif($num2<$num1 && $num2<$num3){
        echo $num2;
    }else{
        echo $num3;
    }
    
?>