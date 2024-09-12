<?php

$str = "There are 15 apples, 23 orange, 32 mangos";
$pattern = '/\d+/';

if(preg_match_all($pattern, $str, $matches)){
    print_r($matches[0]);
}else{
    echo "No Numbers found\n";
}
echo nl2br("\n");
$int_val = (int)filter_var($str, FILTER_SANITIZE_NUMBER_INT);
echo "The numbers are : $int_val";

echo nl2br("\n");

$integer_val = preg_replace('/[^0-9]/', '', $str);
echo "The numbers are : ".$integer_val;

echo nl2br("\n");
//effective way....................
$numbers = '';
for($i=0;$i<strlen($str); $i++){
    if(is_numeric($str[$i])){
        $numbers .= $str[$i];
    }
}
echo($numbers);

