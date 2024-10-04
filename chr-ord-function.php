<?php
// decimal value
$str = chr(65); //---> 66 , 97
echo $str. "<br>";

// Hexadecimal value
$str = chr(0x48);
echo $str. "<br>";

// Octal value 
$str = chr(0120);
echo $str. "<br>";

// ord Function
$str = ord("A");
echo $str. "<br>";

$str = ord("Apple");
echo $str. "<br>";

$str = ord("Hello");
echo $str. "<br>";
?>