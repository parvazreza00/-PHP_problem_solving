<?php
$sample = [
    'fName' => 'Hello',
    'lName' => 'world',
];

print_r($sample);
$newSample = $sample;
$newSample['lName'] = 'Bd';
print_r($newSample); 