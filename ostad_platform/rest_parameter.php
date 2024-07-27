<?php

function sum($x, $y, int ...$numbers): int
{
   return array_sum($numbers)+$x+$y;
}

echo sum(3, 4, 1, 2,3);

