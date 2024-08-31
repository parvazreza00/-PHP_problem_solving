<?php
// find out the largest and smallest number from 3 given number;
echo "Enter a the first number:\n";
$num1 = trim(fgets(STDIN));
echo "Enter the second number: \n";
$num2 = trim(fgets(STDIN));
echo "Enter the third number:\n";
$num3 = trim(fgets(STDIN));

if($num1>$num2 && $num1>$num3){
    printf("The largest number = %d", $num1);
}else if($num2>$num1 && $num2>$num3){
    printf("The largest number = %d", $num2);
}else{
    printf("The largest number = %d", $num3);
}
echo "\n";
echo "and\n";
if($num1<$num2 && $num1<$num3){
    printf("The smallest number = %d", $num1);
}else if($num2<$num1 && $num2<$num3){
    printf("The smallest number = %d", $num2);
}else{
    printf("The smallest number = %d", $num3);
}