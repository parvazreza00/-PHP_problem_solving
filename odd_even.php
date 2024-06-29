<?php

echo "Enter a Number\n";
$number = trim(fgets(STDIN));
echo "$number is :";
$result = ($number % 2 == 0) ? " Even Number" : " Odd Number";
echo $result;
