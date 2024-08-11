<?php
$input = trim(fgets(STDIN));
list($num1, $num2) = explode(' ', $input); 

function sum($num1, $num2){
    if($num1+$num2 == 10){
        echo "True";
    }elseif($num1 == 10){
        echo "True";
    }elseif($num2 == 10){
        echo "True";
    }else{
        echo "False";
    }
}

sum($num1, $num2);
