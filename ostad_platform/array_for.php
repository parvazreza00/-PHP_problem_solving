<?php
$arr = [
    'hello',
    'world',
    2312,
    'parvaz',
];
$n = count($arr);

for($i=$n-1;$i>=0;$i--){
    echo $i.":".$arr[$i]."\n";
}

