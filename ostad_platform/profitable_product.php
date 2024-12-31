<?php
/*Gamble with Profit

Problem Statement
Write a program that takes three arguments prob, prize, pay and returns true if prob * prize > pay; otherwise return false.

Input
The input consists of one float 
F
F and two integer 
N
N, 
M
M numbers

Output
The output will print either "true" or "false"


Input:
0.2 50 9
Output:
true
Notes:
A profitable gamble is a game that yields a positive net profit, where net profit is calculated in the following manner: net_outcome = probability_of_winning * prize - cost_of_playing.
*/

function profitableProduct($prob, $prize, $pay)
{
    $expectedValue = $prob * $prize;
    if ($expectedValue > $pay) {
        echo "true";
    }  else {
        echo "false";
    }
}
$input = trim(fgets(STDIN));
list($num1, $num2, $num3) = explode(' ', $input);
$prob = (float)$num1;
$prize = (int)$num2;
$pay = (int)$num3;

$result = profitableProduct($prob, $prize, $pay);
echo $result;