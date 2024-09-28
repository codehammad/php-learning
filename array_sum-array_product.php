<?php
/* Syntax:
array_sum(array)*/
/* Syntax
array_product(array) */

$a1 = array(2, 4, 6, 8);

$a2 = array("a" => 1.2, "b" => 2.3, "c" => 3.4);  // associative array

// Array Sum
echo "Sum of a1 = " . array_sum($a1). '<br>';
echo "Sum of a2 = " . array_sum($a2). '<br>';

// Array Product
echo "Product of a1 = " . array_product($a1). '<br>';
echo "Product of a2 = " . array_product($a2). '<br>';

?>