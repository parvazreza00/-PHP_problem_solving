<?php
$input1 = trim(fgets(STDIN));
list($x1,$y1) = explode(' ',$input1);
$input2 = trim(fgets(STDIN));
list($x2,$y2) = explode(' ',$input2);
$distance = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
printf("Distance: %.2f",$distance) ;

