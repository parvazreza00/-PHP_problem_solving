<?php
 # Write your PHP code from here
 //area of triangle find out;
 
 $input = trim(fgets(STDIN));
 list($num1, $num2) = explode(' ', $input);
 $T_area = 0.5* $num1 * $num2;
 echo floor($T_area);