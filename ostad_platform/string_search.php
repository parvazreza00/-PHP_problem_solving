<?php

// $string = "hello world. how How are you";
// echo stripos($string,"How");
// echo strrpos($string, "are");
// $str2 = "Quick brown Fox fox jumps over the lazy dog";
// echo str_ireplace( 'fox', "Pox", $str2, $count);
// echo "\n";
// echo $str2;
// echo "count : $count";


// $str = "Lorem ipsum dolor, sit amet lkdfjjflsjfsljflsfjfjslfsfjslfsdflssjfconsectetur adipisicing elit. Quibusdam fuga ex repellat ea expedita animi temporibus, voluptates rerum laborum porro fugiat voluptate ab. Ea fuga cupiditate qui, odit ad vitae repellendus distinctio a dolorem alias, illo quo? Quo aut dicta doloremque ut, fugiat veritatis natus voluptatum, quisquam dignissimos omnis magnam?";

// echo wordwrap($str,30,"<br>", true);
$bio = "Parvaz Reza 01738920277 abc@gmail.com";
$parts = sscanf($bio, "%s %s %11d %s");
$part = sscanf($bio, "%s %s %11d %s", $fname, $lname, $mobile, $email);
print_r($parts);
echo "\n";
echo $email;

