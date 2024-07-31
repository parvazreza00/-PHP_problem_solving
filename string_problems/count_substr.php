<?php

function countSubStr($string, $subStr){
    $count = 0;
    $pos = 0;
    while(($pos = strpos($string, $subStr, $pos)) !==false){
        $count++;
        $pos++;
    }
    return $count;
}

$largeStr = "abababab ab";
$subStr = "ab";

echo  countSubStr($largeStr, $subStr);

// $string="abababab ab";
// $substr = "ab";
// $count = substr_count($string, $substr);
// echo $count;


