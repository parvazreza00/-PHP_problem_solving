<?php
echo "<pre>";
$my_string = "The quick brown fox jumps over the lazy dog";
$arr_explode = explode(" ",$my_string);
// print_r($arr_explode);
$length = count($arr_explode);
for($i=0;$i<=$length;$i++){
    if($i < 5){
        echo $arr_explode[$i].nl2br("\n");
        
    }else{
        break;
    }
}
// echo $length;









echo "</pre>";