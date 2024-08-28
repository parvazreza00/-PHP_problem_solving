<?php
$arr = [3,7,1,9,8];
// echo max($arr);
// echo "\n";
// echo min($arr);

rsort($arr);
print_r($arr);
echo "The second max value is : ";
foreach($arr as $key=>$a){
    if($key == 1){
        echo $a;
    }
}

sort($arr);
print_r($arr);
echo "the second min value is : ";
foreach($arr as $key => $b){
    if($key == 1){
        echo $b;
    }
}