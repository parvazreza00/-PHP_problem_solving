<?php
echo "Enter a string : ";
$input = trim(fgets(STDIN));

function differentChar($str){
    $char_arr = str_split($str);
    $uniqe_char = array_unique($char_arr);
    sort($uniqe_char);
    return implode(", ", $uniqe_char);
} 

echo "Different Characters are: ". differentChar($input);