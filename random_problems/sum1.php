<?php
$input1 = trim(fgets(STDIN));
$input2 = trim(fgets(STDIN));

// list($num1, $num2) = explode(' ', $input); 

function sum($input1, $input2){
    if($input1+$input2 == 10){
        echo "True";
    }elseif($input1 == 10){
        echo "True";
    }elseif($input2 == 10){
        echo "True";
    }else{
        echo "False";
    }
}

sum($input1, $input2);
