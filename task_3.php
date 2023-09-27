<?php
/*
Task 3: Array Sorting  


Create an array called $grades with the following values: 85, 92, 78, 88, 95. Write a PHP function which takes "$grades" as an argument to sort the array in descending order and print the sorted grades as array.

*/


function sortINdecendingOrder($arr){
    rsort($arr); // rsort builtin function used
    return $arr;
}

$grades= [85,92,78,88,95];
print_r(sortINdecendingOrder($grades));

