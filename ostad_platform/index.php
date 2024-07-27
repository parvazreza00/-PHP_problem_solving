<?php

$veg = 'A, B, C, D, E';
$veg_arr = explode(', ',$veg);
print_r($veg_arr);

echo "\n";

$veg_str = join(', ', $veg_arr);
echo $veg_str;
