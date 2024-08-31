<?php
//php code to get the Fibonacci series

//first way
function fibonacci($number)
{
    if ($number == 0)
        return 0;
    else if ($number == 1)
        return 1;
    else
        return (fibonacci($number - 1) + fibonacci($number - 2));
}

$number = 10;
for ($count = 0; $count < $number; $count++) {
    echo fibonacci($count) . " ";
}

echo "\n";

function fibonacci2($n){
    $num1 = 0;
    $num2 = 1;
    $counter = 0;
    while($counter < $n){
        echo $num1.' ';
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter = $counter + 1;
    }

}
$n = 15; 
fibonacci2($n);
