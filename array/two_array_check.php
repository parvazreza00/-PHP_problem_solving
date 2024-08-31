<?php
//PHP Check if two arrays contain same elements
$arr1 = [2,4,1,5];
$arr2 = [2,3,1,6,9];
if(count($arr1)==count($arr2)){
    echo "they are equal.";
}else{
    echo "they are not equal.";
}

echo "\n";

$arr3 = [4, 5, 'hello', 2.45, 3.56];
$arr4 = [5, 2.45, 'hello', 3.56, 4,8];
sort($arr3);
sort($arr4);
if($arr3==$arr4){
    echo "Both array elements are same and equal.";
}else{
    echo "Both array elements are not same and equal.";
}

echo "\n";
$arr5 = ['fname'=>'parvaz','lname'=>'reza','age'=>29];
// print_r($arr5);
$arr6 = ['fname'=>'parvaz','age'=>29, 'lname'=>'reza'];
// print_r($arr6);
if($arr5 == $arr6){
    echo "both are same and equal.";
}else{
    echo "Both are not same and equal";
}


