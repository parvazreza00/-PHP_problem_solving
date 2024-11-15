<?php

$input = trim(fgets(STDIN));
list($num1, $num2) = explode(' ', $input);
$quotient  = $num1 / $num2;
echo intval($quotient) ;