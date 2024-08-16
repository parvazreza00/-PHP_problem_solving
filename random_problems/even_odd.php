<?php
    # Write your PHP code from here
    //check even and odd
    $input = trim(fgets(STDIN));
$input = (int)$input; 

if ($input % 2 == 0) {
    echo "$input is an even number.";
} else {
    echo "$input is an odd number.";
}
    
?>