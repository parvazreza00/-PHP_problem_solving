<?php
//find out most commonly used characters one or more from a string

function findMostCommonChars($str)
{
    $charFrequency = count_chars($str, 1);

    $maxChars = [];
    $maxCount = 0;

    foreach ($charFrequency as $ascii => $count) {
        if ($count > $maxCount) {
            $maxChars = [chr($ascii)];
            $maxCount = $count;
        } elseif ($count == $maxCount) {
            $maxChars[] = chr($ascii);
        }
    }

    return $maxChars;
}

$string = "engineering";
$mostCommonCharacters = findMostCommonChars($string);
echo "The most common characters in the string are: " . implode(", ", $mostCommonCharacters);
