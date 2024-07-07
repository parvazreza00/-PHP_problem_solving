<?php


echo "Enter a array string like(helloWorld!)\n";
$str = trim(fgets(STDIN));
echo "Original String: ".$str;
echo "\n";
echo "Character wise : ";
$arr_str = str_split($str);
foreach($arr_str as $char){
    echo $char. " ";
}

echo "\n";
//another way
for($i=0; $i<strlen($str); $i++){
    echo $str[$i]." ";
}
