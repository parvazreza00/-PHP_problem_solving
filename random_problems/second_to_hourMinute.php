<?php
//Convert the given time (in seconds) into hours, and minutes

function secondsToHoursMinutes($seconds)
{
    $hours = floor($seconds / 3600);
    $minutes = floor(($seconds % 3600) / 60);
    return "$hours:$minutes";
}

$input = trim(fgets(STDIN));
$duration = secondsToHoursMinutes($input);
echo $duration;
