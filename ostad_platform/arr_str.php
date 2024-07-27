<?php
$student = [
    "fName"=> 'jamal',
    "lName"=> 'Ahmed',
    'age' => 28,
    'class' => 8,
    'section' => 'B'
];
print_r($student);
echo "\n";
echo $student['fName']." ".$student['lName']."\n";
printf('%s %s',$student['fName'],$student['lName']);

$serialized = serialize($student);
echo $serialized;
echo "\n";
$unserilalized = unserialize($serialized);
print_r($unserilalized);
echo "\n";
$jsonData = json_encode($student);
echo $jsonData;
echo "\n";
$jsonDecode = json_decode($jsonData,true);
print_r($jsonDecode);
echo "\n";
$arra = array ("This" , "Array" , "Will" ,    
    "Be" , "Converted" , "To" , "A" , "String");   
echo implode(" ", $arra);
echo "\n";
echo join("-", $arra);