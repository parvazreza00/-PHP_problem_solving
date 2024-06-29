<?php
//summing a given array all values, only even values and only odd values;
$arr = [2,4,1,6,8,9];
$arr_sum = 0;

//using for loop
// for($i=0; $i<sizeof($arr); $i++){
//     $arr_sum += $arr[$i];
// }

//using foreach loop
foreach($arr as $n){
    $arr_sum += $n;
}

//using array_walk() function
// array_walk($arr, function($value) use(&$sum){
//     $sum += $value;
// });


echo "Sum of array values: $arr_sum\n";

echo "\n";

//summing only even values from an array 
$even_sum = 0;
for($i=0;$i<sizeof($arr);$i++){
    if($arr[$i] % 2 == 0){
        $even_sum += $arr[$i]; 
    }
}
echo "The even value sum: ".$even_sum;

echo "\n";

//summing only odd values from an array 
$odd_sum = 0;
for($i=0;$i<sizeof($arr);$i++){
    if($arr[$i] % 2 != 0){
        $odd_sum += $arr[$i]; 
    }
}

echo "The odd values sum: ".$odd_sum;

