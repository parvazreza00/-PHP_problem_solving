<?php
function string_rotation($str1, $str2){
    if(strlen($str1) !== strlen($str2)){
        echo "NO\n";
    }

    if(strlen($str1) == strlen($str2)){
        $str1 = $str1.$str1;
    }

    if(strpos($str1, $str2) > 0){
        echo "yes\n";
    }else{
        echo "No\n";
    }

}
echo "Enter first String : ";
$str1 = trim(fgets(STDIN));
echo "Enter second String : ";
$str2 = trim(fgets(STDIN));
echo $str1.$str2."\n";

string_rotation($str1, $str2);