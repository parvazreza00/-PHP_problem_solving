<?php
// conversion hexadecimal to binary in php
echo "Enter a HexaDecimal Number:\n";
$hex = trim(fgets(STDIN));
$dec = hexdec($hex);//firstly hex to dec
$bin = decbin($dec);// and then dec to binary
$paddedbinary = str_pad($bin, strlen($hex) * 4, '0', STR_PAD_LEFT);
echo "$hex = $paddedbinary";
//finally hex to binary conversion


?>