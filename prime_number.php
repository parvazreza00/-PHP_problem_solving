<?php
//php problem find out the prime numbers
$count = 0;
$num = 2;
while ($count < 5) {
    $div_count = 0;
    for ($i = 1; $i <= $num; $i++) {
        if (($num % $i) == 0) {
            $div_count++;
        }
    }
    if ($div_count < 3) {
        echo $num . " , ";
        $count = $count + 1;
    }
    $num = $num + 1;
}
echo "\n";
//another way to find out a number is prime or not;
function check_prime($num){
    if($num == 1){
        return 0;
    }
    for($i = 2; $i <= $num/2; $i++){
        if($num % $i == 0){
            return 0;
        }else{
            return 1;
        }
    }
}
$num = 47;
$flag = check_prime($num);

if($flag == 1){
    echo $num." is a prime number";
}else{
    echo $num. " is not a prime number";
}

echo "\n";

//another way to find out a number is prime or not by sqrt();
function check_prime_number($num){
    if($num == 1){
        return 0;
    }
    for($i = 2; $i <= sqrt($num); $i++){
        if($num % $i == 0){
            return 0;
        }else{
            return 1;
        }
    }
}
$num = 47;
$flag = check_prime_number($num);

if($flag == 1){
    echo $num." is a prime number";
}else{
    echo $num. " is not a prime number";
}




