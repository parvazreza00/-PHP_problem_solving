<?php





function RepdigitTest($input){
    if($input < 0){
        return false;
    }

    $numStr = strval($input);
    $fistDigit = $numStr[0];

    for($i = 1; $i<strlen($numStr); $i++){
        if($numStr[$i] !== $fistDigit){
            return false;
        }
    }
    return true;

}


$input = trim(fgets(STDIN));
$result = RepdigitTest($input);
if($result){
    echo "true";
}else{
    echo 'false';
}