<?php
$arr1 = [2,4, 5,2,8, 5];
// $result = array_unique($arr1);
// print_r($result);
// $result2 = array_diff_assoc($arr1,$result);
// print_r($result2);

echo "\n";
// $arr1 = [2, 4, 5, 2, 8, 5];
$duplicate = [];

for($i=0;$i<count($arr1);$i++){
    for($j = $i+1;$j<count($arr1);$j++){
        if($arr1[$i] == $arr1[$j]){
            $duplicate[] = $arr1[$j];
            break;
        }
    }  
}
// Print the duplicates after the loop has completed
print_r($duplicate);

