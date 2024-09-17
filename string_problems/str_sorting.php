<?php
$num = trim(fgets(STDIN));
$input = trim(fgets(STDIN));
$arr = explode(' ', $input);
print_r($arr);
usort($arr, function($a, $b){
    return strlen($a) - strlen($b);
});
foreach($arr as $a){
    echo $a." ";
}

