<?php

function binarySearch($arr, $k){
    $low = 0;
    $high = count($arr)-1;

    while($low <= $high){
        $mid = floor(($low + $high)/2);

        //if min index value equal given value then given value found on mid index
        if($arr[$mid] == $k){
            return $mid;
        }
        //if mid index value is less then given search value then left subarray ignore;
        elseif($arr[$mid] < $k){
            $low = $mid + 1;
        }
         //if mid index value is greater than given search value then right subarray ignore;
        else{
            $high = $mid - 1;
        }
    }

    return -1;
}


$arr= [1, 3, 5, 7, 17, 11, 13, 19, 9, 15]; 
sort($arr);
$k = 9;

$position = binarySearch($arr, $k);
if($position != -1){
    echo "Element $k found at position : $position";
}else{
    echo "Element $k do not found";
}
