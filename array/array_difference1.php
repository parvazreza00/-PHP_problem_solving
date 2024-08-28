<?php
// array max min difference
$arr = [2,6,4,3,1,8,7];
echo "Array max value is : ". max($arr)."\n";
echo "Array min value is : ". min($arr)."\n";
echo "Difference between array max min value: ". max($arr) - min($arr);

echo "\n";

//using sort() and rsort() function
$arr_copy = $arr;
sort($arr_copy);
$arr_min = $arr_copy[0];
$des_sort = $arr;
rsort($des_sort);
$arr_max = $des_sort[0];
echo "Array max value is : ".$arr_max. "\n";
echo "Array min value is : ".$arr_min. "\n";
echo "Difference between array max min value : ".$arr_max - $arr_min;



