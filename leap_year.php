<?php
// checking a year is leap year or not
printf("Enter a year\n");
$year = trim(fgets(STDIN));
if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
    printf("$year is a leap year\n");
}else{
    printf("$year is not a leap year\n");
}



