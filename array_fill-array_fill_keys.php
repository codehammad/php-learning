<?php
/* The array_fill() function fills an array with values.
Syntax:
array_fill(index, number, value) */

/* The array_fill_keys() function fills an array with values, specifying keys.
Syntax:
array_fill_keys(keys, value)*/

// Array Fill Keys
$a = array("a","b","c","d","e");

 $newArray = array_fill_keys($a, "Hammad");
 echo "<pre>";
print_r($newArray);
echo "</pre>";

// Array Fill
$newArray1 = array_fill(6, 15, "Hammad");
echo "<pre>";
print_r($newArray1);
echo "</pre>";
?>
