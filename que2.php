<?php 

//Php code to find the repeated number
  
function printRepeating($arr, $size) 
{ 
    $i; 
    $j; 
    echo " Repeating elements = "; 
  
    for($i = 0; $i < $size; $i++) 
        for($j = $i + 1; $j < $size; $j++) 
            if($arr[$i] == $arr[$j]) 
                echo $arr[$i], " "; 
}  

$arr = array(9, 1, 3, 4, 5, 3, 1); 
$arr_size = sizeof($arr, 0); 
printRepeating($arr, $arr_size); 
  
?> 