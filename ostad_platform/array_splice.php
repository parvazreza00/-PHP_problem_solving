<?php
$fruits = array('apple','banana',"orange","dates","mango");
$someFruits = array_splice($fruits, 2, 2,["p","R"]);
print_r($someFruits);
print_r($fruits);