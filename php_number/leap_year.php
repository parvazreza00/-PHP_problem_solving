<?php
// check a year is leap year or not

echo "Enter a year\n";
$year = trim(fgets(STDIN));
// if($year % 4 == 0){
//     echo "$year is a lear year\n";
// }elseif($year % 400 == 0){
//     echo "$year is a lear year\n";
// }elseif($year % 100 != 0){
//     echo "$year is not a leap year\n";
// }else{
//     echo "$year is not a leap year\n";
// }

// if($year % 4 == 0 && ($year % 100 !=0 || $year % 400 == 0)){
//     echo "$year is a leap year\n";
// }else{
//     echo "$year is not a leap year\n";
// }

$leapYear = ($year % 4 == 0) ? "$year is Leap year" : (($year % 100 == 0) ? "$year is Leap year" : (($year % 400 == 0) ? "$year is Leap year" : "$year is not Leap year"));
echo $leapYear;






