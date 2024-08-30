<?php

// Suppose, you work in a toy car workshop, and your job is to build toy cars from a collection of parts. Each toy car needs 4 wheels, 1 car body, and 2 figures of people to be placed inside. Write a program which will calculate how many complete toy cars can be made, given the total number of wheels, car bodies and figures available.

function calculateToyCars($wheels, $carBodies,$figures){
    $wheel_number = floor($wheels/4);
    $body_number = floor($carBodies/1);
    $figure_number = floor($figures/2);

    $build_cars = $wheel_number;
    if($body_number<$build_cars){
        $build_cars = $body_number; 
    }
    if($figure_number<$build_cars){
        $build_cars = $figure_number;
    }
    return $build_cars;
}

$input = trim(fgets(STDIN));
list($num1, $num2, $num3) = explode(" ",$input);

$number_of_cars = calculateToyCars($num1, $num2, $num3);
echo $number_of_cars;



