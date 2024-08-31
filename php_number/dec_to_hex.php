<?php
// all number conversion in php-------
//decimal to binary
echo "Enter a decimal number\n";
$dec = trim(fgets(STDIN));
if(preg_match('/[0-9]+$/',$dec)){
    $bin1 = decbin($dec);
    echo "Decimal to binary is $dec = $bin1 \n";
}else{
    echo "Invalid number\n";
}

//binary to decimal
echo "Enter a binary number\n";
$bin2 = trim(fgets(STDIN));
if(preg_match('/^[01]+$/',$bin1)){
    $dec2 = bindec($bin2);
    echo "Binary to decimal is $bin2 = $dec2 \n";
}else{
    echo "Invalid Number\n";
}

//decimal to octal 
echo "Enter a decimal number\n";
$dec3 = trim(fgets(STDIN));
if(preg_match('/^[0-9]+$/', $dec3)){
    $oct1 = decoct($dec3);
    echo "Decimal to octal is $dec3 = $oct1\n";
}else{
    echo "Invalid Number\n";
}

//octal to decimal 
echo "Enter an octal number \n";
$oct2 = trim(fgets(STDIN));
if(preg_match('/^[0-7]+$/', $oct2)){
    $dec4 = octdec($oct2);
    echo "Octal to decimal is $oct2 = $dec4 \n";
}else{
    echo "Invalid number\n";
}

//decimal to hexadecimal
echo "Enter a decimal number\n";
$dec5 = trim(fgets(STDIN));
if(preg_match('/^[0-9]+$/',$dec5)){
    $hex1 = dechex($dec5);
    echo "Decimal to Hexadecimal is $dec5 = $hex1 \n";
}else{
    echo "Invalid Number\n";    
}

//hexadecimal to decimal
echo "Enter a hexadecimal number\n";
$hex2 = trim(fgets(STDIN));
if(preg_match('/^[0-9a-aA-F]+$/', $hex2)){
    $dec6 = hexdec($hex2);
    echo "Hexadecimal to decimal is $hex2 = $dec6 \n";
}else{
    echo "Invalid number\n";
}

//binary to octal
echo "Enter an Binary number For Octal\n";
$bin3 = trim(fgets(STDIN));
if(preg_match('/^[01]+$/', $bin3)){
    $dec7 = bindec($bin3);
    $oct3 = decoct($dec7);
    echo "Binary to Octal is $bin3 = $oct3 \n";
}else{
    echo "Invalid Number\n";
}

//octal to binary 
echo "Enter an octal number for binary\n";
$oct4 = trim(fgets(STDIN));
if(preg_match('/^[0-7]+$/', $oct4)){
    $dec8 = octdec($oct4);
    $bin4 = decbin($dec8);   
    echo "Octal to binary is $oct4 = $bin4 \n";
}else{
    echo "Invalid Number\n";
}

//binary to hexadecimal
echo "Enter a binary number for hexadecimal\n";
$bin5 = trim(fgets(STDIN));
if(preg_match('/^[01]+$/', $bin5)){
    $dec9 = bindec($bin5);
    $hex3 = dechex($dec9);
    echo "Binary to hexadecimal is $bin5 = $hex3 \n";
}else{
    echo "Invalid Number\n";
}

//hexadecimal to binary
echo "Enter a hexadecimal number for binary\n";
$hex4 = trim(fgets(STDIN));
if(preg_match('/^[0-9a-fA-F]+$/',$hex4)){
    $dec10 = hexdec($hex4);
    $bin6 = decbin($dec10);
    echo "Hexadecimal to binary is $hex4 = $bin6 \n";
}else{
    echo "Invalid Number\n";
}

//binary to octal


?>