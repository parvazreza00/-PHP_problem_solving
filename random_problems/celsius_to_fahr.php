<?php

    $input = trim(fgets(STDIN));
    $fahrenheit = ($input*9/5) + 32;
    printf("The temperature in Fahrenheit is: %.2f",$fahrenheit);