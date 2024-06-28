<?php
//create a new array taking the first two elements from a given array. If the length of the given array is less than 2 then return the give array.
$arr = [2, 7, 3, 1, 9, 6];
function newArr($arr)
{
    if (sizeof($arr) >= 2) {
        $front_site = [$arr[0], $arr[1]];
    } elseif (sizeof($arr) < 2) {
        $front_site = [$arr[0]];
    } else {
        $front_site = [];
    }
    return $front_site;
}

$result1 = newArr($arr);
print_r($result1);

echo "\n";
// Create an array taking two middle elements from a given array of integers of length even
function createNewArrTwoMiddleEle($arr)
{
    $middleIndex = sizeof($arr) / 2;
    $middleTwoEle = [$arr[$middleIndex - 1], $arr[$middleIndex]];

    return $middleTwoEle;
}
$result2 = createNewArrTwoMiddleEle($arr);
print_r($result2);

//create new array from the last two element from a given array;
echo "\n";
$arr_size = sizeof($arr);
$last_two_ele = [$arr[$arr_size - 2], $arr[$arr_size - 1]];
print_r($last_two_ele);
