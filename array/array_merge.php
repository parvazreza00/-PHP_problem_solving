<?php
$arr1 = [2,4,1,7];
$arr2 = [1,9,1,9];
$arr3 = [2,3,0,10];
$arr4 = array_merge($arr1,$arr2,$arr3);
print_r($arr4);
echo "\n";
$arr5 = ['fname' => 'parvaz','lname' => 'reza','age' => 28];
$arr6 = ['profess' => 'engineer', 'office' => 'RDTL'];
$arr7 = ['deg1' => 'SSC', 'deg2' => 'HSC', 'deg3' => 'Hons'];
$ass_arr = array_merge($arr5,$arr6,$arr7);
print_r($ass_arr);
