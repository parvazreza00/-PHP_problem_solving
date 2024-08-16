<?php
//search substring from a string
$input_string = "sravan kumar author at geeks for geeks";
$substr = "geeks";
if(strpos($input_string, $substr) !== false){
    echo "True";
}else{
    echo "False";
}

echo "\n";

if(str_contains($input_string, $substr)){
    echo "True";
}else{
    echo "False";
}

echo "\n";

$count = substr_count($input_string,$substr);
if($count>0){
    echo "True";
}else{
    echo "False";
}
