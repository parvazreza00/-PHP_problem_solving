<?php
//php program for remove duplicate element from an array

$array = [1, 2, 2, 3, 4, 4, 5];

print_r(array_unique($array));

echo "\n";

//another way
$uniqueArray = array_filter($array, function($value, $key) use ($array) {
    return array_search($value, $array) === $key;
}, ARRAY_FILTER_USE_BOTH);

print_r(array_values($uniqueArray));


//another way
echo "another way using in_array()\n";
function removeDuplicate($array){
    $uniqeArr = [];
    foreach($array as $value){
        if(!in_array($value,$uniqeArr)){
            $uniqeArr[] = $value;
        }
    }
    return $uniqeArr;
}
print_r(removeDuplicate($array));


//another way
echo "using another way by in_array() function\n";
$finalArr = array();
foreach($array as $key => $value){
    if(!in_array($value, $finalArr)){
        $finalArr[$key] = $value;
    }
}
print_r($finalArr);


?>