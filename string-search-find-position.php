<?php
/* Syntax: strrpos(string,find,start) */

// strpos --- Find the position of the first
$str = "Hello world. The world is nice";

$newStr = strpos($str, "world");

echo "<pre>";
print_r($newStr);
echo "</pre>";

$newStr = strpos($str, "world", 10);
echo "<pre>";
print_r($newStr);
echo "</pre>";

$newStr = strpos($str, "world", -20); // use negative start value
echo "<pre>";
print_r($newStr);
echo "</pre>";

// strrpos - Finds the position of the last occurrence
$newStr = "strpos :" . strpos($str, "world");

echo "<pre>";
print_r($newStr);
echo "</pre>";

$newStr = "strrpos :" . strrpos($str, "world");
echo "<pre>";
print_r($newStr);
echo "</pre>";

// stripos - Find the position of the first occurrence  ya case insensitive ha
$newStr = "stripos :" . stripos($str, "WORLD");

echo "<pre>";
print_r($newStr);
echo "</pre>";

$newStr = "stripos :" . stripos($str, "WORLD", 10);

echo "<pre>";
print_r($newStr);
echo "</pre>";

// strripos -Finds the position of the last occurrence ya case insensitive ha
$newStr = "strripos :" . strripos($str, "WORLD");

echo "<pre>";
print_r($newStr);
echo "</pre>";

?>