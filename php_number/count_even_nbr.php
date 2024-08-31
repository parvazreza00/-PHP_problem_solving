<?php
// write a PHP program to count even number and show their position by indexing with values from a given array;

$arr = [3,9,6,1,4,8,11,18];
$evens = 0;


for($i = 0; $i<sizeof($arr); $i++){
    if($arr[$i] % 2 == 0){
        $positions[] = $i;
        $event_number[] = $arr[$i];
        $evens++;
    }
        
}
echo "Number of even number: ".$evens."\n";

foreach($positions as $posi){
    echo $posi." ";
}
echo "\n";
foreach($event_number as $n){
    echo $n." ";
}
