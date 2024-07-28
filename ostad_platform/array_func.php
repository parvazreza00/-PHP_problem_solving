<?php
function square($n){
    return $n * $n;
}

$numbers = array(1,2,3,4);
$squareNumbers = array_map('square', $numbers);
print_r($squareNumbers);

echo "\n";

$base = array('apple','banana','cherry');
$replacements = array(0 => 'apricot', 2 => 'jackfruit');
$replace = array_replace($base, $replacements);
print_r($replace);
echo "\n";
$input = array("a" => 1, "b" => 2, "c" => 3);
$flipped = array_flip($input);
print_r($flipped);
echo "\n";
$input = array("First" => 1, "SecONd" => 4);
$result = array_change_key_case($input, CASE_UPPER);
print_r($result);
echo "\n";
function add($x,$y){
    $x += $y;
    return $x;
}
$a = array(1,2,3,4,5);
$x = array_reduce($a,'add');
echo $x;
echo "\n";
$num = [10,20,30];
function sum($pre, $cur){
    return $pre + $cur;
}
$summestion = array_reduce($num, "sum");
echo $summestion;
echo "\n";
$summ = array_reduce($num, function($a,$b){
    return $a + $b;
});
echo "Sum : ". $summ;
echo "\n";


$carts = [
    ['item' => 'A', 'qty' => 2, 'price' => 10],
    ['item' => 'B', 'qty' => 3, 'price' => 20],
    ['item' => 'C', 'qty' => 5, 'price' => 30]
];


$total = array_reduce(
    $carts,
    function ($prev, $item) {
        return $prev + $item['qty'] * $item['price'];
    }
);

echo $total; 
echo "\n";
function userfunction($value, $key){
    echo "The key $key has the value $value \n";
}

$tech = array("a" => "youtube", "b"=> "google", "c"=>"whatsapp");
array_walk($tech, "userfunction");
