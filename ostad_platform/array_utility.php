<?php
// $numbers = array(1,2,3,4,5,6,7,8,9,10);
// function square($n){
//     echo $n*$n."\n";
// }
// array_walk($numbers, 'square');
// echo "\n";
// $fruits = ['apple','banana','juice','lichue'];
// function printItem($item, $key){
//     echo "The fruits index $key is $item\n";
// }
// array_walk($fruits, 'printItem');
// echo "\n";
// $numbers = [1,2,3,4,5];
// function multiplyByTwo(&$item, $key){
//     $item *= 2;
// }
// array_walk($numbers, 'multiplyByTwo');
// print_r($numbers);
// echo "\n";

// $names = ['John','Jane','Doe'];
// function greetPerson(&$item, $key, $greeting){
//     $item = "$greeting, $item";
// }
// array_walk($names, 'greetPerson','Hello');
// print_r($names);
// echo "\n";
// $numbers = [1,2,3,4,5];
// function square($n){
//     return $n*$n;
// }
// $squareNumbers =array_map('square', $numbers);
// print_r($squareNumbers);
// echo "\n";
// $squareNumbers = array_map(function($num){
//     return $num*$num;
// }, $numbers);
// print_r($squareNumbers);
// echo "\n";
// $n1 = [1,2,3,4,5,6];
// $n2 = [1,2,3,4,5,6];

// function add($n1,$n2){
//     return $n1 + $n2;
// }
// $sumArray = array_map('add',$n1,$n2);
// print_r($sumArray);

// $numbers = [1,2,3,4,5,6,7,8,9,10,11,12];
// function even($numbers){
//     return $numbers % 2 != 0;
// }
// $filter_even = array_filter($numbers, 'even');
// print_r($filter_even);

// $persons = array('Sujon','kobir','sumon','tamim','sonjoy');
// function startbyS($name){
//     return strtolower($name[0]) == 'k';
// }
// $name_search = array_filter($persons, "startbyS");
// print_r($name_search);
// $words = ['apple', 'bee', 'car', 'dog', 'elephant'];
// $search = array_filter($words, function($w){
//     return strlen($w)>3;
// });
// print_r($search);
// echo "\n";
$numbers = [1,2,3,4,5,6,7,8,9,10,11,12];
function evensum($num1, $num2){
    if($num2 % 2 == 0 ){
        return $num1 + $num2;
    }
    return $num1;
}
$sum = array_reduce($numbers, 'evensum');
echo $sum;








