<?php

function numberOfFrames($fps, $minutes){
    return $fps * $minutes * 60;
}
$input = trim(fgets(STDIN));
list($fps, $minutes) = explode(' ', $input);
$fps = (int)$fps;
$minutes = (int)$minutes;

$result = numberOfFrames($fps, $minutes);
echo $result;