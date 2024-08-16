<?php
//print the last character of string.
$str = trim(fgets(STDIN));
$length = strlen($str);
echo $str[$length - 1];
echo "\n";
echo substr($str, -1);
