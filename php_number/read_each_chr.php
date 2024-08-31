<?php


echo "Enter a array string like(helloWorld!)\n";
$str = trim(fgets(STDIN));
echo "Original String: ".$str;
echo "\n";
echo "Character wise : \n";
$arr_str = str_split($str);
foreach($arr_str as $char){
    echo $char. " ";
}

echo "\n";
//another way
for($i=0; $i<strlen($str); $i++){
    echo $str[$i]." ";
}

echo "\n";

//another wary
$chr = preg_split('//u',$str, -1, PREG_SPLIT_NO_EMPTY);
foreach($chr as $c){
    echo $c . " ";
}

