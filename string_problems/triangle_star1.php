<?php

echo "Enter a Row number:\n";
$number = trim( fgets( STDIN ) );
for ( $i = 1; $i <= $number; $i++ ) {
    for ( $j = 1; $j <= $i; $j++ ) {
        echo " * ";
    }
    echo "\n";
}

echo "\n";
for ( $i = 1; $i <= $number; $i++ ) {
    for ( $j = $number - $i; $j >= 0; $j-- ) {
        echo " * ";
    }
    echo "\n";
}

for ( $i = 0; $i <= $number; $i++ ) {
    for ( $k = $number; $k >= $i; $k-- ) {
        echo " ";
    }

    for ( $j = 1; $j <= $i; $j++ ) {
        echo "* ";
    }

    echo "\n";
}
echo "\n";

for ( $i = 1; $i <= $number; $i++ ) {
    for ( $k = 1; $k <= $i; $k++ ) {
        echo " ";
    }
    for ( $j = $number; $j >= $i; $j-- ) {
        echo "* ";
    }
    echo "\n";
}

echo "\n";

for ( $i = 1; $i <= $number; $i++ ) {
    for ( $k = $number; $k >= $i; $k-- ) {
        echo " ";
    }
    for ( $j = 1; $j <= $i; $j++ ) {
        echo "* ";
    }
    echo "\n";
}
for ( $i = 0; $i <= $number; $i++ ) {
    for ( $k = 1; $k <= $i; $k++ ) {
        echo " ";
    }
    for ( $j = $number; $j >= $i; $j-- ) {
        echo "* ";
    }
    echo "\n";
}

echo "\n";

for ( $i = 1; $i <= $number; $i++ ) {
    for ( $j = 1; $j <= $i; $j++ ) {
        echo " * ";
    }
    echo "\n";
}
for ( $i = 1; $i <= $number; $i++ ) {
    for ( $j = $number; $j >= $i; $j-- ) {
        echo " * ";
    }
    echo "\n";
}

echo "\n";
for ( $i = 0; $i <= $number; $i++ ) {
    for ( $j = 0; $j <= $number; $j++ ) {
        echo " * ";
    }
    echo "\n";
}

echo "\n";
for($i=$number; $i>=1; $i--){
    if($i%2 != 0){
        for($j=$number; $j>=$i; $j--){
            echo " * ";
        }
        echo "\n";
    }
}
for($i=2; $i<=$number; $i++){
    if($i%2 != 0){
        for($j = $number; $j>=$i; $j--){
            echo " * ";
        }
        echo "\n";
    }
}
