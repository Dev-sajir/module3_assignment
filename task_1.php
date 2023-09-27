<?php


/*
Task 1: String Manipulation


Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.". Write a PHP function which takes "$text" as an argument to:

Convert the string to all lowercase.


Replace "brown" with "red" in the string.


Print the modified text.

*/


function convertTolowercase($text){

$lowercase_convert =  strtolower($text); // the $text is converting to lowercase

$modified_result =  str_replace('brown', 'red', $lowercase_convert); // the 'brown' is replacing by 'red'

echo $modified_result;

}

convertTolowercase("The quick brown fox jumps over the lazy dog.");
