<?php
// Add on starting on the Array
$fruit = ["orange", "banana", "grapes"];

array_shift($fruit);
echo "<pre>";
print_r($fruit);
echo "</pre>";

// Delete from starting on the Array
$fruit = ["orange", "banana", "grapes"];

array_unshift($fruit,"Apple", "lemon");
echo "<pre>";
print_r($fruit);
echo "</pre>";
?>