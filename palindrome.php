<?php
//check a number is palindrome or not

//positive number is palindrome or not
// echo "Enter a positive number : ";
// $input = trim(fgets(STDIN));


// function palindrome($n){
//     $number = $n;
//     $sum = 0;
//     while(floor($number)){
//         $rem = $number % 10;
//         $sum = $sum * 10 + $rem;
//         $number =( int )($number / 10);
//     }
//     return $sum;
// }

// // $input = 65;
// $num = palindrome($input);
// if($input == $num){
//     echo "$input is a palindrome number";
// }else{
//     echo "$input is not a palindrome number";
// }

// echo "\n";

//string is palindrome or not;
echo "Enter a number string or Character string : ";
$str = trim(fgets(STDIN));

if(preg_match('/^[a-zA-Z0-9]$/', $str)){
    $str  = $str; 
}
function stringPalindrome($str){
    if(strrev($str) == $str){
        return 1;
    }else{
        return 0;
    }
}

if(stringPalindrome($str)){
    echo "$str is a palindrome";
}else{
    echo "$str is not a palindrome";
}

