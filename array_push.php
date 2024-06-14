<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

<?php
    
    $friends = ['Alice', 'Bob', 'Charlie'];
    array_push($friends,'parvaz');
    print_r($friends);
    echo "<br>";
    $numbers = array(2,3,4,5,6);
    array_push($numbers,7,8,9);
    print_r($numbers);
    echo "<br>";
    $num = [2,3,4,5,6,7];
    $num [] = 9;
    print_r($num);
    echo "<br>";
    $birds = ['sparrow','crow','pigeon'];
    $remobe_item = array_pop($birds);
    print_r($birds);
    echo "<br>";
    echo "remove item : ". $remobe_item;
    echo "<br>";

    $countries = [
        'USA' => 'United States',
        'CAN' => 'Canada',
        'MEX' => 'Mexico',
        'BRA' => 'Brazil',
        'ARG' => 'Argentina'
    ];

    print_r(array_keys($countries));

    echo "<br>";

    print_r(array_values($countries));

    echo "<br>";

    print_r(array_merge($countries,$birds));





?>
    
</body>
</html>