<?php

function is_binary($number){
    return preg_match('/^[01]+$/', $number);
}

echo "Enter binary number:\n";
$number = trim(fgets(STDIN));
if(is_binary($number)){
    echo "This binary $number = decimal ".base_convert($number, 2, 10);
}else{
    echo "Invalid number.\n";
}


?>
