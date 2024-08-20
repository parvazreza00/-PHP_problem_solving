<?php
echo "Enter a string: ";
$str = trim(fgets(STDIN));

echo "The first word of string is : ". strtok($str, " ");

echo "\n";
$array = explode(" ", $str);
// print_r($array);
foreach($array as $key => $arr){
    if($key==0){
        echo "The first word is : ".$arr;
        break;
    }
}

echo "\n";
$first_word = strstr($str, " ", true);
echo "The first word is : ". $first_word;