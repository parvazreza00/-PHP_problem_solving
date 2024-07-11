<?php

echo "Enter a caharacter a-z : ";
$letter = trim(fgets(STDIN));

function isVowel($letter)
{
    $letter = strtolower($letter);
    if (
        $letter == 'a' ||
        $letter == 'e' ||
        $letter == 'i' ||
        $letter == 'o' ||
        $letter == 'u'
    ) {
        return 1;
    } else {
        return 0;
    }
}

if (isVowel($letter)) {
    echo "$letter is vowel";
} else {
    echo "$letter is constant";
}
