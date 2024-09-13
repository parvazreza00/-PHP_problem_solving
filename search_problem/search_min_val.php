<?php
// Function to find the minimum value in a rotated sorted array
function findMinValue($arr){
    $low = 0;
    $high = count($arr) - 1;

     // If the array is not rotated (already sorted)
    if($arr[$low] <= $arr[$high]){
        return $arr[$low];
    }

    while($low <= $high){

        // If the array has only one element
        if($low == $high){
            return $arr[$low];
        }

        $mid = floor(($low + $high)/2);

        if($mid < $high && $arr[$mid] > $arr[$mid + 1]){
            return $arr[$mid + 1];
        }

        if($mid > $low && $arr[$mid] < $arr[$mid - 1]){
            return $arr[$mid];
        }

        if($arr[$mid] > $arr[$high]){
            $low = $mid + 1;
        }else{
            $high = $mid - 1;
        }

    }
    return -1;
}

// $arr = [4, 5, 6, 7, 0, 1, 2];
echo "Enter the size of the array (N): ";
$size = intval(fgets(STDIN));
echo "Enter the elements of the array separated by spaces: ";
$input = trim(fgets(STDIN));
$arr = array_map('intval', explode(' ', $input));
sort($arr);

// echo findMinValue($arr);
echo findMinValue($arr);
