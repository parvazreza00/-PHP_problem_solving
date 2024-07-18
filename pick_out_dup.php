<?php

$array = [3,1,2,5,3,4,6,8];
$dup_value = array_diff_assoc($array, array_unique($array));
print_r($dup_value);


echo "\n";
for($i = 0; $i<sizeof($array); $i++){
    for($j=$i + 1; $j<sizeof($array); $j++){
        if($array[$i] == $array[$j]){
            echo $array[$j]." ";
        }
    }
}