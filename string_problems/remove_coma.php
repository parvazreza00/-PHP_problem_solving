<?php
$number_str = "2,543.12";
echo "Original number String: ".$number_str.nl2br("\n");
$x = str_replace(",",'',$number_str);
if(is_numeric($x)){
    echo "Remove comma : ".$x.nl2br("\n");
}

echo nl2br("\n");

$name = "john,smith and parvaz,reza";
echo "Origninal String: ".$name.nl2br("\n");
$remove_comma = str_replace(","," ", $name);
echo "Remove comma string: ".$remove_comma.nl2br("\n");



