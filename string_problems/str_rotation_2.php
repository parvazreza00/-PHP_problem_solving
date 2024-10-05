<?php
$input = trim(fgets(STDIN));
list($str1, $str2) = explode(" ", $input);

function string_rotation($str1, $str2){
    if(strlen($str1) == strlen($str2) && strlen($str1) > 0){
        $str1 = $str1 . $str1; // Concatenate the string with itself
        if(strpos($str1, $str2) !== false){
            echo "True";
        } else {
            echo "False";
        }
    } else {
        echo "False";
    }
}
string_rotation($str1, $str2);

