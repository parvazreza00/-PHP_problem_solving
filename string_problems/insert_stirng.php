<?php
//Insert string at specified position in PHP

$sen = "I am happy today.";
$str = " very";
$posi = 4;
if($posi < 0 || $posi > strlen($sen)){
    echo "Invlaid Position";
}else{
    echo substr_replace($sen, $str, $posi, 0);
}

echo "\n";

if($posi < 0 || $posi > strlen($sen)){
    echo "Invalid Position";
}else{
    echo substr($sen, 0, $posi) . $str. substr($sen, $posi);
}


