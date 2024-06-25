<?php
// conversion hexadecimal to binary in php
echo "Enter a HexaDecimal Number:\n";
$hex = trim(fgets(STDIN));
if(preg_match('/^[0-9a-fA-F]+$/',$hex)){
    //firstly hex to dec
    $dec = hexdec($hex);
    // $bin = decbin($dec);// and then dec to binary
    // and then dec to binary
    $bin = base_convert($dec,10,2);
    $paddedbinary = str_pad($bin, strlen($hex) * 4, '0', STR_PAD_LEFT);
    echo "$hex = $paddedbinary";
    //finally hex to binary conversion
}else{
    echo "Invalid Number\n";
}



?>