<?php

// Command line input for two strings
$input = trim(fgets(STDIN));
list($mainString, $subString) = explode(' ', $input);

// Function to count occurrences
function countOccurrences($mainString, $subString) {
    $count = 0;
    $subStringLength = strlen($subString);
    $mainStringLength = strlen($mainString);

    for ($i = 0; $i <= $mainStringLength - $subStringLength; $i++) {
        $currentSubstring = substr($mainString, $i, $subStringLength);
        if ($currentSubstring === $subString) {
            $count++;
        }
    }

    return $count;
}

$result = countOccurrences($mainString, $subString);
echo $result;





