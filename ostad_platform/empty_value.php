<?php

$name = null;
if(isset($name) && (is_numeric($name) || $name !='')){
    echo "Name is set and it's not empty";
}else{
    echo "Name is either not set or it's empty";
}
