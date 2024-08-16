<?php

echo "Enter a string : ";
$str = trim(fgets(STDIN));
echo "Enter a character : "; 
$char = trim(fgets(STDIN)); 
$char_position = strpos($str, $char);
echo "The position of $char is : $char_position";
