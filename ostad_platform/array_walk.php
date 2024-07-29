<?php

function myfunction($value, $key, $p){
    echo "$key $p $value"."\n";
}
$a = array("a" => "red", "b"=>"green","c"=>"blue");
array_walk($a, "myfunction", "has the value");