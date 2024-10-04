<?php
// Math:Max Function
$val = max(22,14,68,18,15);
echo $val . "<br>";
 
// Math:Min Function
$val = min(22,14,68,18,15);
echo $val . "<br>";
 
// Math:Max single Array Function
$val = max(array(44,16,81,12));
echo $val . "<br>";

// Math:Min single Array Function
$val = min(array(44,16,81,12));
echo $val . "<br>";

// Math:Max Multiple Array Function
$val = max(array(2, 4, 8), array(2, 5, 1));
echo "<pre>";
print_r($val);
echo "</pre>";

// Math:Min Multiple Array
$val = min(array(2, 4, 8), array(2, 5, 1));
echo "<pre>";
print_r($val);
echo "</pre>";

// Math:Max Boolean Value Function
$val = max(TRUE,FALSE);
echo $val . "<br>";

$val = min(TRUE,FALSE);
echo $val . "<br>";

$val = max(TRUE,0);
echo $val . "<br>";


?>