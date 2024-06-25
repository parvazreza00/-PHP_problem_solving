<?php
<<<<<<< HEAD
echo "Enter a character a-z or A-Z.\n";
=======

>>>>>>> 472f1d656430d761d99397181dc857a20a1e96fc
$str = trim(fgets(STDIN));

if(preg_match('/^[a-zA-Z]$/', $str)){
    $char_to_ascii  = ord($str); 
}else{
<<<<<<< HEAD
    echo "Invalid character\n";
}
echo $char_to_ascii . "\n";

echo "Enter only digit(0-9)\n";
=======
    echo "Enter only character(a-z or A-Z) \n";
}
echo $char_to_ascii . "\n";

>>>>>>> 472f1d656430d761d99397181dc857a20a1e96fc
$intval = trim(fgets(STDIN));

if(is_numeric($intval)){
    $value = $intval;
}else{
<<<<<<< HEAD
    echo "Invalid character. \n";
=======
    echo "Enter only digit(0-9)\n";
>>>>>>> 472f1d656430d761d99397181dc857a20a1e96fc
}
echo $value . "\n";
$sum = $char_to_ascii + $value;

<<<<<<< HEAD
echo "Your expectation character is : ".chr($sum);


=======
echo "Your expected result is : " . chr($sum);
>>>>>>> 472f1d656430d761d99397181dc857a20a1e96fc


?>