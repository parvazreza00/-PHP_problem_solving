<?php
//Write a program to create a function that returns the lexicographically first rearrangements of a lowercase string.

//To find the lexicographically first rearrangement of a lowercase string, you simply need to sort the characters of the string in ascending alphabetical order. 

$input = trim(fgets(STDIN));
$arr = str_split(strtolower($input));

sort($arr);

$line_str = implode('',$arr);
echo $line_str;


