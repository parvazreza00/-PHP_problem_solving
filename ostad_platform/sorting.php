<?php
// $numbers = [3,8,1,9,4,7,4];
// sort($numbers, SORT_STRING);
// print_r($numbers);
$fruits = array("apple","Apple","banana","Banana","juice","Juice");
sort($fruits,SORT_STRING | SORT_FLAG_CASE);
print_r($fruits);

