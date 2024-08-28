<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array_combine()</title>
</head>
<body>

<?php
$number = [1,2,3];
$value = array('parvaz','reza','yeasin');
$combined = array_combine($number,$value);
print_r($combined);
echo "<br>";
$keys = array('a', 'b', 'a');
$values1 = array(1, 2, 3);
$combined_1 = array_combine($keys,$values1);
print_r($combined_1);
echo "<br>";
$keys2 = array('a' => 'apple', 'b' => 'banana', 'c' => 'cherry');
$values2 = array('apple', 'banana', 'cherry');
$combined_2 = array_combine($keys2,$values2);
print_r($combined_2);

?>
    
</body>
</html>