<?php
//get a substring between two strings in PHP
$str = "Hello Bangladesh I'm your son";
$start_str = "Bangladesh";
$end_str = "son";

$start_str_first_pos = strpos($str, $start_str);
// echo $start_str_pos;
// echo strlen($start_str);
$start_str_end_pos =  $start_str_first_pos + strlen($start_str);
$end_str_pos = strpos($str, $end_str);
// echo $end_str_pos;
$sub_str = $end_str_pos - $start_str_end_pos;
// echo $sub_str;
$sub_string =  substr($str,$start_str_end_pos,$sub_str);
echo trim($sub_string);
