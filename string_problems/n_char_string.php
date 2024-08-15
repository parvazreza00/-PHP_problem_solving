<?php
//get the last n characters of a PHP string
echo "Enter a string : ";
$str = trim(fgets(STDIN));
echo "Enter a integer Number : ";
$n_length = trim(fgets(STDIN));
$cut_length = strlen($str) - $n_length;
$last_string = substr($str, $cut_length);
echo $last_string;
