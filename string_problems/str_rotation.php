<?php
function isRotation($str1, $str2) {
    // Check if the lengths of the strings are the same and not empty
    if (strlen($str1) === strlen($str2) && strlen($str1) > 0) {
        // Concatenate str1 with itself
        $concatenatedStr = $str1 . $str1;

        // Check if str2 is a substring of the concatenated string
        return strpos($concatenatedStr, $str2) !== false;
    }

    return false;
}

// Example usage with command line input
echo "Enter two strings separated by a space: ";
$input = trim(fgets(STDIN));
list($str1, $str2) = explode(' ', $input);

if (isRotation($str1, $str2)) {
    echo "True\n";
} else {
    echo "False\n";
}