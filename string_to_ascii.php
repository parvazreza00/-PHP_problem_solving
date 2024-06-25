<?php
echo "Enter a character a-z or A-Z.\n";
$str = trim(fgets(STDIN));

if(preg_match('/^[a-zA-Z]$/', $str)){
    $char_to_ascii  = ord($str); 
}else{
    echo "Invalid character\n";
}
echo $char_to_ascii . "\n";

echo "Enter only digit(0-9)\n";
$intval = trim(fgets(STDIN));

if(is_numeric($intval)){
    $value = $intval;
}else{
    echo "Invalid character. \n";
}
echo $value . "\n";
$sum = $char_to_ascii + $value;

echo "Your expectation character is : ".chr($sum);




?>