<?php

function printN($i){
    if($i>=10){
        return;
    }
    echo $i."\n";
    $i++;
    printN($i);
}

// printN(1);

function printCounter($counter, $end, $stepping=1){
    if($counter>$end){
        return;
    }
    echo "$counter\n";
    $counter += $stepping;
    printCounter($counter, $end, $stepping);
}
// printCounter(21,37, 5);

function factorial($n){
    $result =1;
    for($i=$n;$i>=1;$i--){
        $result = $result * $i;
    }
    return $result;
}
echo factorial(6);

