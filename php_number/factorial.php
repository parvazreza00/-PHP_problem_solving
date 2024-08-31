<?php
//only for looping
echo "Enter a positive Number: ";
$number = trim( fgets( STDIN ) );
$f = 1;
for($i=1;$i<=$number;$i++){    
    $f = $f * $i;
}
echo "$number factorial value is : ".$f;
echo "\n";

//by function
function factorial1( $number ) {
    $fact = 1;
    for ( $i = 1; $i <= $number; $i++ ) {
        $fact = $fact * $i;
    }
    return $fact;
}


$fact_val = factorial1( $number );
echo "$number factorial value is = $fact_val";

//by recursive function;
function factorial2( $number ) {
    if ( $number <= 1 ) {
        return 1;
    } else {
        return $number * factorial2( $number - 1 );
    }
}
$fact_val2 = factorial2( $number );
echo "$number factorial value is = $fact_val2";
