<?php
$assoc = array("a"=>"z","b"=>"y","c"=>"x");
$values = array_values($assoc);
print_r($values);
echo "\n";
$keys = array_keys($assoc);
print_r($keys);

echo "\n";
$key = ["a","b","c"];
$values = ['Apple',"banana","chrut"];
$combine = array_combine($key, $values);
print_r($combine);

echo "\n";
// Fill an array with 5 elements, each having the value "apple"
$fruits = array_fill(0, 5, "apple");

// Print the array
print_r($fruits);
echo "\n";
$input = array("red", "green", "blue", "yellow", "purple");
// $splice = array_splice($input, 1, 2);
// print_r($splice);
// echo "\n";
// print_r($input);
// echo "\n";
$slice = array_slice($input, 1,2);
print_r($slice);
echo "\n";
$numbers = array(1, 2, 3, 4, 5);
 echo array_product($numbers);