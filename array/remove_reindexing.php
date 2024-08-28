<?php
//remove any value from an array and reindexing

$arr = [4,2, 8, 5, 1];
print_r($arr);
foreach($arr as $key=>$a){
    if($key == 2){
        unset($arr[2]);
    }
}
// unset($arr[2]);
print_r($arr);

$reIndexing = array_values($arr);
print_r($reIndexing);


// another way by array_splice(array, offset, length);
$arr2 = [4,2, 8, 5, 1];
array_splice($arr2, 2, 1);
print_r($arr2); 

