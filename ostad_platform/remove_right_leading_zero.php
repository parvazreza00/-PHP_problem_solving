<?php
function removeTrailingZeros($number) {
    // Check if the number contains a decimal point
    if (strpos($number, '.') !== false) {
        // Remove trailing zeros after the decimal point
        $number = rtrim($number, '0');
        // Remove the decimal point if it's the last character
        $number = rtrim($number, '.');
    }
    return $number; // Return the processed number
}

// Test the function

$input = trim(fgets(STDIN));
$output = removeTrailingZeros($input);
echo $output; // Output: 505.45
?>