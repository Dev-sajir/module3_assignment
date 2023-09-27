<?php


function convertTolowercase($text){

$lowercase_convert =  strtolower($text); // the $text is converting to lowercase

$modified_result =  str_replace('brown', 'red', $lowercase_convert); // the 'brown' is replacing by 'red'

echo $modified_result;

}

convertTolowercase("The quick brown fox jumps over the lazy dog.");
