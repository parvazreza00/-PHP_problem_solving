<?php
function isRepdigit($number) {
    // Convert the number to a string
    $numberStr = (string)$number;
    
    // Get the first digit of the number
    $firstDigit = $numberStr[0];
    
    // Check if all characters in the string are the same as the first digit
    foreach (str_split($numberStr) as $digit) {
        if ($digit !== $firstDigit) {
            return "false";
        }
    }
    return "true";
}

// Read input from the user
echo "Enter number: ";
$input = trim(fgets(STDIN));

// Output result
echo isRepdigit($input);
?>