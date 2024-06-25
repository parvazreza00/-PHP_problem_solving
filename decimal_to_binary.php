<?php

function is_decimal($number){
    return preg_match('/^[0-9]+$/', $number);
}

echo "Enter decimal number:\n";
$number = trim(fgets(STDIN));
if(is_decimal($number)){
    echo "This decimal $number = binary ".decbin($number);
}else{
    echo "Invalid number.\n";
}


?>
