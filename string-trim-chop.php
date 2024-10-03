<?php

/* The trim() function removes whitespace and other predefined characters from both sides of a string.
Syntax:trim(string,charlist) */

// String Trim Function
$str = "Hammad";
echo "<pre>";
print_r($str);
echo "</pre>";

$newstr = trim($str,"H");
echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = trim($str,"ad");

echo "<pre>";
print_r($newstr);
echo "</pre>";

// String Left & Right Trim Function
$newstr = rtrim($str,"Had");

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = ltrim($str,"Had");

echo "<pre>";
print_r($newstr);
echo "</pre>";

// String Remove Trim Function
$str = " Hammad Fayyaz ";

$newstr = trim($str);

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = rtrim($str);

echo "<pre>";
print_r($newstr);
echo "</pre>";

// String Chop Trim Function-- work same as rtrim
$str = "Hammad Fayyaz";
$newstr =  chop($str, "yaz");

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr =  chop($str, "yaz");

echo "<pre>";
print_r($newstr);
echo "</pre>";


?>