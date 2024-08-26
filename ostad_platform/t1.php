<?php

$randomNumbers = [208, 54, 376, 162, 440, 64, 390, 482, 67, 209];
$filter = array_filter($randomNumbers, function($num){
return $num > 50 && $num % 2 == 0;
});

$result = array_map(function($num){
    return $num * 2;
}, $filter);

print_r($result);

?>
