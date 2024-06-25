<?php
echo "Enter a binary number.\n";
$bin = trim(fgets(STDIN));
if(preg_match('/^[01]+$/', $bin)){
    $dec = bindec($bin);
    // $hex = dechex($dec);
    $hex = base_convert($dec,10,16);
    echo "$bin = $hex";
}else{
    echo "Invalid Number\n";
}


?>