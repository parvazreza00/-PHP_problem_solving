<?php    
    
    $arr = array(2, 2, 3, 4, 4, 4, 8, 8, 6, 6, 9, 9, 9, 9);
    
    // new array containing frequency of values of $arr
    $arr_freq = array_count_values($arr);    
    print_r($arr_freq);
    arsort($arr_freq);
    print_r($arr_freq);
    
     // arranging the new $arr_freq in decreasing order 
     // of occurrences
     arsort($arr_freq);
     
     // $new_arr containing the keys of sorted array
     $new_arr = array_keys($arr_freq);
     
     // Second most frequent element
     echo "Second most frequent element is:"." ".$new_arr[1];
?>