<?php
$fruits = array('apple','banana','orange','plum','dates','mango');
print_r($fruits);
$somefruits = array_slice($fruits,-4,-1, true);
print_r($somefruits);