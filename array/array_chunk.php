<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_chunk()</title>
</head>
<body>
   <pre>
   <?php
    $numbers = [1,2,3,4,5,6,7,8,9,10];
    $chunk = array_chunk($numbers, 3);
    
    print_r($chunk);
    echo "<br>";
    $array = range(1,8);
    foreach($array as $value){
        echo $value. " ";
    }
    echo "<br>";
    print_r($array);
    echo "<br>";

    $chunk2 = array_chunk($array, 3, true);
    print_r($chunk2);

    echo "<br>";

    $array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
    $chunks = array_chunk($array, 2, true);
    print_r($chunks);

    echo "<br>";
    $fruits = array('apple','mango','banana','pineapple');
    $chunk3 = array_chunk($fruits,1, true);
    print_r($chunk3);
    echo '<br>';
    $empty_arr = [];
    $chunk4 = array_chunk($empty_arr,2);
    print_r($chunk4);

    echo "<br>";
    $com_number = [1, 2, 3, 4, 5];
    $comp_array = compact('com_number');
    
    foreach ($comp_array['com_number'] as $key => $num) {
        echo $key . '=' . $num . "<br>";
    }
    echo "<br>";
    
    function getInfo($name, $age, $prof){
        return compact('name','age','prof');
    }
    $name = 'parvaz';
    $age = 28;
    $prof = 'Engineer';
    $person = getInfo($name, $age, $prof);
    print_r($person);

    echo "<br>";
    $vars = ['name1','age1','city'];
    $name1 = 'Reza';
    $age1 = 28;
    $city = 'Dhaka';
    $person1 = compact($vars);
    print_r($person1);

    ?>
   </pre>
</body>
</html>