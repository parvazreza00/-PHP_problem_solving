<?php

$sample = [
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444],
    [1111,2222,3333,4444,[5,6,7]],
];
print_r($sample);
echo $sample[3][4][1];