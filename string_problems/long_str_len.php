<?php
function lengthSubstr($str) {
    $n = strlen($str);
    $start = 0;
    $maxLength = 0;
    $index = [];

    for ($end = 0; $end < $n; $end++) {
        
        $currentChar = $str[$end];
        if (isset($index[$currentChar]) && $index[$currentChar] >= $start) {
            $start = $index[$currentChar] + 1;
        }  

        $index[$currentChar] = $end;        
        $maxLength = max($maxLength, $end - $start + 1);

    }
    
    return $maxLength;
}

$input = trim(fgets(STDIN));
echo lengthSubstr($input);
?>
