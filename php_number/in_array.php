<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $fruits = array('apple','orange','mango','bannana');
    if(in_array('bannana', $fruits)){
        echo "There has bannana";
    }else{
        echo "There has not bannana";
    }

    echo "<br>";
    $numbers = [2,3,4,5,12,20];
    $value = 12;
    echo in_array($value, $numbers) ? "$value has into the array" : "$value has not present into the array";
    echo "<br>";
    $people = array(
        array('name' => 'parvaz', 'age' => 28),
        array('name' => 'tomal', 'age' => 28),
        array('name' => 'Reza', 'age' => 28),
    );
    $findName = 'tomal';
    foreach($people as $person){
        if(in_array($findName, $person)){
            echo "$findName is present";
            break;
        }
    }
    echo "<br>";
    $person = array('name' => 'parvaz', 'age' => 28, 'profession' => 'engineer');
    if(in_array(28, $person)){
        echo "parvaz is present in the array";
    }else{
        echo "parvaz is not present in the array";
    }
    echo "<br>";
    $colores = [['green','black'],['red','blue'],['yellow','pink']];
    if(in_array(['green','black'],$colores)){
        echo "found";
    }else{
        echo "nt found";
    }

?>
</body>
</html>