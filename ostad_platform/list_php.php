<?php
// $students = array('parvaz','rasel','nahid','tomal');
// list($fistst, $secondst, $thirdst, $fourst) = $students;
// echo $fistst.$secondst.$thirdst.$fourst;

// $person = ['firstName' => 'Bob', 'lastName' => 'Brown', 'age' => 40];
// // reset($person);
// foreach($person as $key=>$value){
//     echo "$key : $value\n";
// }

// echo "\n";

// $people = [
//     ['Michael', 'Johnson', 35],
//     ['Emily', 'Davis', 22],
//     ['Sarah', 'Miller', 29]
// ];
// foreach($people as list($firstn, $lname, $age)){
//     echo "First Name : $firstn, Last Name : $lname, Age : $age\n";
// }

$random = mt_rand(0,99);
$luck = $random;
print_r($luck);
echo "\n";
if($random % 2 == 0){
    echo "Head\n";
}else{
    echo "Tail\n";
}