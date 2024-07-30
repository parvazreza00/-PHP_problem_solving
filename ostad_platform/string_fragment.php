<?php

// $string = "Hello world, How are you";
// $parts = explode(" ",$string);
// print_r($parts);
// $origins = join(" ",$parts);
// echo $origins;
// $part2 = str_split($string);
// print_r($part2);

function printDuplications($str){
    $charCount = array();
    for($i=0;$i<strlen($str);$i++){
        $char = $str[$i];

        if(isset($charCount[$char])){
            $charCount[$char]++;
        }else{
            $charCount[$char] = 1;
        }
    }

    foreach($charCount as $char => $count){
        echo "Character $char appears $count times\n";
    }


}

$str = "hello world. how are you?";
printDuplications($str);

