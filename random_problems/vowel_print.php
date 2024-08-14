<?php
    # Write your PHP code from here
    //find a vowel from a string;
    $input = trim(fgets(STDIN));
    $char = str_split($input);
    $vowels = ['a','e','i','o','u','A','E','I','O','U'];

$vowelFound = false;

foreach($char as $val) {
    if(in_array($val, $vowels)) {
        $vowelFound = true;
        echo "The string contains a vowel.";
        break;
    }
}

if (!$vowelFound) {
    echo "The string does not contain any vowel.\n";
}
    
?>