<?php

// function countSubStr($string, $subStr){
//     $count = 0;
//     $pos = 0;
//     while(($pos = strpos($string, $subStr, $pos)) !==false){
//         $count++;
//         $pos++;
//     }
//     return $count;
// }

// $largeStr = "abababab ab";
// $subStr = "ab";

// echo  countSubStr($largeStr, $subStr);

// $string="abababab ab";
// $substr = "ab";
// $count = substr_count($string, $substr);
// echo $count;

function count_substring($s, $t){
    if(empty($s) || empty($t)){
        return 0;
    }
    $count = substr_count($s, $t);
    return $count;
}
$s = trim(fgets(STDIN));
$t = trim(fgets(STDIN));
echo count_substring($s,$t);




