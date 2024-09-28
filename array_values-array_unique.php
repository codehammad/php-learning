<?php

/* The array_values() function returns an array containing all the values of an array.
Syntax:
array_values(array) */

/* array_unique()
The array_unique() function removes duplicate values from an array.
Syntax:
array_unique(array, sorttype) */

// Array Values
$a1 = array("a"=>"red","b"=>"green","c"=>"red","d"=>"yellow");

$newArray = array_values($a1);

echo "<pre>";
print_r($newArray);
echo "</pre>";

// Array Unique

$newArray1 = array_unique($a1);

echo "<pre>";
print_r($newArray1);
echo "</pre>";
?>