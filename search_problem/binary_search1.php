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


// $arr= [1, 3, 5, 7, 17, 11, 13, 19, 9, 15]; 
echo "Enter the size of the array (N): ";
$size = intval(fgets(STDIN));
echo "Enter the elements of the array separated by spaces: ";
$input = trim(fgets(STDIN));
$arr = array_map('intval', explode(' ',$input));

sort($arr);

echo "Enter the targeted value: ";
$k = intval(fgets(STDIN));

$position = binarySearch($arr, $k);
if($position != -1){
    echo  $position;
}else{
    echo "Element not found";
}
