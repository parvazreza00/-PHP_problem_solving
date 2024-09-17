<?php
$input = trim(fgets(STDIN));
$arr = explode(" ", $input);
foreach($arr as $key => $a){
    if(is_string($a)){
        echo "$key => ".strtoupper($a)."\n";
    }
    else{
        echo "$key => ". $a."\n"; 
    }
    
}

echo "\n";
echo "by array_map() function\n";

function str_to_upper($arr){
    return array_map(function($value){
        if(is_string($value)){
            return strtoupper($value);
        }
        return $value;
    }, $arr);
}

print_r(str_to_upper($arr));