<?php

$input = trim(fgets(STDIN));
list($num1, $num2) = explode(' ', $input);
$reminer = $num1 % $num2;
echo $reminer;