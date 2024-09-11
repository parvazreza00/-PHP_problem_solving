<?php
$str = "  Geeks for Geeks  ";
$len = strlen($str);
echo $len."\n";
$num_of_char = str_replace(" ", "", $str);
$len2 = strlen($num_of_char);
echo $len2;
echo "\n";
$count = 0;

foreach(str_split($str) as $key => $char){
if($char != ' ')

    $count++;

}
echo $count;

echo "\n";
$length = 0;
for($i = 0; isset($str[$i]); $i++){
    if($str[$i] != ' '){
        $length++;   
    }   
}
echo $length;





