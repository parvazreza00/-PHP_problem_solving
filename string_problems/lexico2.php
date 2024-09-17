<?php
//Write a program to create a function that returns the lexicographically last rearrangements of a lowercase string.

//To find the lexicographically last rearrangement of a lowercase string, you need to sort the characters of the string in descending alphabetical order.

$input = trim(fgets(STDIN));
$arr = str_split(strtolower($input));

rsort($arr);

$line_str2 = implode('',$arr);
echo $line_str2;



