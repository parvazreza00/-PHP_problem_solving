<?php

function generatePermutation($string, $start, $end){
    if($start == $end - 1){
        echo $string . "\n";
    } else {
        for($i = $start; $i < $end; $i++){  // Corrected the loop condition
            // Swap the characters
            $temp = $string[$start];
            $string[$start] = $string[$i];
            $string[$i] = $temp;

            // Recursive call
            generatePermutation($string, $start + 1, $end);

            // Backtrack (swap back)
            $temp = $string[$start];
            $string[$start] = $string[$i];
            $string[$i] = $temp;
        }
    }
}

echo "Enter a String: ";
$str = trim(fgets(STDIN));
$n = strlen($str);
echo "Permutation of '$str':\n";
generatePermutation($str, 0, $n);


 