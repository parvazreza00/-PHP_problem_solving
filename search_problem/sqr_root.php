<?php
// Function to find the floor of the square root of a non-negative integer
function apprSqrt($n) {
    if ($n == 0 || $n == 1) {
        return $n;
    }

    $low = 1;
    $high = $n;
    $ans = 0;

    while ($low <= $high) {
       
        $mid = floor(($low + $high) / 2);

        if ($mid * $mid == $n) {
            return $mid;
        }

        if ($mid * $mid < $n) {
            $low = $mid + 1;
            $ans = $mid;
        } 
        else {
            $high = $mid - 1;
        }
    }

    return $ans;
}

$n = intval(fgets(STDIN));
echo apprSqrt($n);
