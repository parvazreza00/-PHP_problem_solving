<?php
$input = trim(fgets(STDIN));
$bonus = (floatval($input) * 0.10);
echo floor($bonus);