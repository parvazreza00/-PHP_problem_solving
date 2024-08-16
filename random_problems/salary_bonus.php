<?php
    # Write your PHP code from here
//find out the salary bonus from over the salary;
    $input = trim(fgets(STDIN));
    $salary_bonus = $input * 0.10;//10%

    echo floor($salary_bonus);
    
?>