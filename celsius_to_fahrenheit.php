<?php
// convert celsius to fahrenheit in php
echo "Enter a celsius temperature : ";
$celsius = trim(fgets(STDIN));
$fahrenheit = ((9 * $celsius)/5) + 32;
printf("Celsius to Fahrenheit value = %.2f",$fahrenheit);
echo "\n";
echo "Enter a fahrenheit temperature : ";
$fahrenTem = trim(fgets(STDIN));
$celsiusTem = (($fahrenTem-32) * 5) / 9;
printf("Fahrenheit  to celsius value : %.2f",$celsiusTem);