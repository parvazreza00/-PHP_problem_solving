<?php
$arr1 = [2,4, 5,2,8,5];
// $result = array_unique($arr1);
// print_r($result);
// $result2 = array_diff_assoc($arr1,$result);
// print_r($result2);

// echo "\n";

// // $arr1 = [2, 4, 5, 2, 8, 5];
// $duplicate1 = [];
// for($i=0;$i<count($arr1);$i++){
//     for($j = $i+1;$j<count($arr1);$j++){
//         if($arr1[$i] == $arr1[$j]){
//             $duplicate1[] = $arr1[$j];
//             break;
//         }
//     }  
// }
// // Print the duplicates after the loop has completed
// print_r($duplicate1);

echo "\n";
$arr1 = [2, 4, 5, 2, 8, 5];

// Step 1: Count the values in the array
$value_counts = array_count_values($arr1);

// Step 2: Use array_filter() to filter out duplicates
$duplicate = array_filter($value_counts, function($counts) {
    return $counts > 1;
});

$duplicate_values = array_keys($duplicate);
$indexed_duplicates = array_values($duplicate_values);

// Step 3: Print the duplicate values
print_r($indexed_duplicates);

echo "\n";

function findDuplicates($arr1){
    $duplicates = array_filter($arr1, function($item) use ($arr1){
        return count(array_keys($arr1, $item)) > 1;
    });
    return array_values(array_unique($duplicates));
}
print_r(findDuplicates($arr1));


