<?php

//FizzBuzz problem in php.............. 

// for($i = 1; $i <= 100; $i++){
//     if($i % 3 == 0 && $i % 5 == 0) {
//         echo $i. " FizzBuzz\n";
//     }elseif($i % 3 == 0){
//         echo $i. " Fizz\n"; 
//     }elseif($i % 5== 0){
//         echo $i. " Buzz\n";
//     }else{
//         echo $i."\n";
//     }
// }

//another way 
for($i=1; $i<=100;$i++){
    $fizz_buzz = ($i % 3 == 0 && $i % 5 == 0) ? "FizzBuzz" : (($i % 3 == 0 )? "Fizz" : (($i % 5 == 0) ? "Buzz" : $i));
    echo $fizz_buzz." ";
}
