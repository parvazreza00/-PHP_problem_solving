<?php

$str = trim(fgets(STDIN));

$ascii_val = array_map(function($str){
    return ord($str);
}, str_split($str));

print_r($ascii_val);

?>