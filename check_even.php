<?php
//an array is checking there present even number or odd number
$arr = [3,5,7,4,9];
$count = count($arr);
$even = "No even number";

for($i = 1; $i <= $count; $i++){
    if($arr[$i] % 2 === 0){
        $even = "Have Even number";
        break;
    }
}
echo $even;
echo "\n";
$odd = "No odd number";
for($i = 1; $i <= $count; $i++){
    if($arr[$i] % 2 != 0){
        $odd = "Have Odd number";
        break;
    }
}
echo $odd;




