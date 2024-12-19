<?php
echo "Take a number leading zero combination : ";
$input = trim(fgets(STDIN));
$fresh_number = ltrim($input, "0");
echo "The original number is : $input \n";
echo "After removing leading zeros number is : $fresh_number";
echo "\n";
echo "another way\n";
$nao_way = (int)($input);
echo (string)$nao_way;

echo "\nanother way\n";
function removeLeadingZeros($input){
    return preg_replace('/^0+/', '', $input);
}

echo removeLeadingZeros($input);