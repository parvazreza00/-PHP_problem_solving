<?php
// a PHP program to create a new array taking the first two elements from a given array. If the length of the given array is less than 2 then return the give array.
$arr = [2,7,5,0,2];
function newArr($arr){
    if(sizeof($arr)>=2){
        $front_site = [$arr[0],$arr[1]];
    }elseif(sizeof($arr) < 2){
        $front_site = [$arr[0]];
    }else{
        $front_site = [];
    }
    return $front_site;
}

$result = newArr($arr);
print_r($result);