<?php

$str = trim(fgets(STDIN));

if(preg_match('/^[a-zA-Z]$/', $str)){
    $char_to_ascii  = ord($str); 
}else{
    echo "Enter only character(a-z or A-Z) \n";
}
echo $char_to_ascii . "\n";

$intval = trim(fgets(STDIN));

if(is_numeric($intval)){
    $value = $intval;
}else{
    echo "Enter only digit(0-9)\n";
}
echo $value . "\n";
$sum = $char_to_ascii + $value;

echo "Your expected result is : " . chr($sum);


?>