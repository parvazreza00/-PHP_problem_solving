<?php

echo "Enter a string : ";
$str = trim(fgets(STDIN));
echo "Original string : ".$str;
echo "\n";
echo "Reverse string : ".strrev($str); 

echo "\n";

//another way
echo "Reverse String with for Loop: ";
for($i = (strlen($str)-1); $i>=0;$i--){
    echo $str[$i];
}
echo "\n";

//by function 
function Reverse($str){
    return "Reverse string with function:".strrev($str);
}
echo Reverse($str);


