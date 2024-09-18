<?php
$input = trim(fgets(STDIN));
if($input != ''){
    $clean_str = preg_replace('/[^a-zA-Z0-9]/s',' ',$input);
    echo $clean_str;
}else{
    echo "You Don't insert any Input\n";
}