<?php
//to convert array to string in PHP

$arr = array("Welcome","to", "Our", "beautify", "country");
$str = implode(" ", $arr);
echo $str; 
//json_encode()
echo nl2br("\n");
$str2 = json_encode($arr);
echo $str2;
echo nl2br("\n");
//using for loop
foreach($arr as $str){
    echo $str." ";
}
//using for loop
echo nl2br("\n");
for($i=0; $i<count($arr); $i++){
    echo $arr[$i]." ";
}

echo nl2br("\n");

//using array_reduce() function
$array_to_string =  array_reduce($arr, function($carry, $item){
    return $carry === ''? $item : $carry." ". $item;
},"");
echo $array_to_string;


