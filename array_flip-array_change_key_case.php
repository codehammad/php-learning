<?php
/* The array_flip() function flips/exchanges all keys with their associated values in an array.
Syntax:
array_flip(array) */

/* The array_chunk() function splits an array into chunks of new arrays.
Syntax:
array_chunk(array, size, preserve_key) */

// Array Flip
$a = array(
    "Bill" =>10,
    "Joe" => 20,
    "Peter" => 30
);

$newArray = array_flip($a);

echo "<pre>";
print_r($newArray);
echo "</pre>";


// array_change_key_case
$newArray2 = array_change_key_case($a);
echo "<pre>";
print_r($newArray2);
echo "</pre>";

//default is lower case

// CASE_UPPER or CASE_LOWER
$newArray3 = array_change_key_case($a, CASE_UPPER);
echo "<pre>";
print_r($newArray3);
echo "</pre>";




?>