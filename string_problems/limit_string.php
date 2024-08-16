<?php
$str = "This is a long sentence that needs to be truncated.";
$arr = str_split($str);
// print_r($arr);
for($i=0;$i<15;$i++){
    echo $arr[$i];
}

echo "\n";

$limitword = 5;
$wordArr = explode(" ",$str);
// print_r($wordArr); 
$sliceArr = array_slice($wordArr, 0, $limitword);
// print_r($sliceArr);
$limitStr = implode(" ",$sliceArr);
echo $limitStr;

echo "\n";

$limitword2 = 5;
$wordArr2 = explode(" ",$str);
// print_r($wordArr); 
if(count($wordArr2)> $limitword2){
    $sliceArr2 = array_slice($wordArr2, 0, $limitword2);
    $limitStr2 = implode(" ",$sliceArr2)."...";
}else{
    $limitStr2 = $str;
}

// print_r($sliceArr);

echo $limitStr2;


