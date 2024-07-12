<?php
//check odd and even without 50 to 60 
for($i=1;$i<=100;$i++){
    if($i>=50 && $i<=60){
        continue;
    }
    if($i%2==0){
        echo "$i:Even"." ";
    }else{
        echo "$i:Odd"." ";
    }
}


?>