<?php
/* The substr() function returns a part of a string.
Syntax: substr(string,start,length) */

// String:Substring Function
$str = "Hello world. The world is nice";

$newstr = substr($str, 5);
echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = substr($str, 15);
echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = substr($str, -10);
echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr =  substr($str, 0, 10);
echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = substr($str, 10, 20);
echo "<pre>";
print_r($newstr);
echo "</pre>";
?>