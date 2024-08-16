<?php

$str = "";
if(empty($str)){
    echo "This is empty string";
}else{
    echo "This is not empty string";
}

echo "\n";
if(strlen($str)===0){
    echo "This is empty string";
}else{
    echo "This is not empty string";
}

echo "\n";

if($str === ""){
    echo "This is empty string";
}else{
    echo "This is empty string";
}

echo "\n";

if(isset($str) && $str===''){
    echo "This is empty string";
}else{
    echo "This is not empty string";
}