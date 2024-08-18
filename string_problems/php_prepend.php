<?php
echo "Enter first string : "; 
$str1 = trim(fgets(STDIN));
echo "Enter second string : "; 
$str2 = trim(fgets(STDIN));

function prepend_string($str1,$str2){
    $str1 .= $str2;
    return $str1;
}


$result = prepend_string($str1,$str2);
echo $result;