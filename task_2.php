<?php 


function removeEvennumbers($arr){
    foreach ($arr as $number){
        if($number % 2 != 0){
            $result[] = $number;
        }
    }
    return $result;
}

$numbers = [1,2,3,4,5,6,7,8,9,10];
print_r(removeEvennumbers($numbers));