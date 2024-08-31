<?php

// $time_12_hour = '07:05:45PM';

// $newDate = new DateTime($time_12_hour);
// $timeIn24HourFormat = $newDate->format('H:i:s');
// echo $timeIn24HourFormat;

// $time_24_hour = '11:50:30';

// $newDate = new DateTime($time_24_hour);
// $timeIn12HourFormat = $newDate->format('g:i:s a');
// echo $timeIn12HourFormat;

function to_24_hour($hours, $minutes, $seconds, $meridiem){
    $hours = sprintf("%02d", (int) $hours);
    $minutes = sprintf("%02d", (int) $minutes);
    $seconds = sprintf("%02d", (int) $seconds);
    $meridiem = (strtolower($meridiem) == 'am') ? 'am' : 'pm';
    return date("H:i:s", strtotime("{$hours}:{$minutes}:{$seconds} {$meridiem}"));
}
echo to_24_hour('07','05', '45', 'PM');
// echo to_24_hour('02','30','00', 'pm');

// function to_12_hour($hours, $minutes, $seconds){
//     $hours = sprintf("%02d", (int) $hours);
//     $minutes = sprintf("%02d", (int) $minutes);
//     $seconds = sprintf("%02d", (int) $seconds);
//     return date("g:i:s a", strtotime("{$hours}:{$minutes}:{$seconds}"));
// }
// // echo to_24_hour(1,2,3);
// echo to_12_hour('11','30','00');


?>