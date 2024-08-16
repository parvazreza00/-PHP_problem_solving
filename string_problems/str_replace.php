<?php
$str = "geeks for Geeks";
$str1 = "geeks";
$str2 = "GEEKS";

$str = str_ireplace($str1, $str2, $str);
echo $str;
