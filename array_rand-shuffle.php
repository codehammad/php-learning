<?php
/* Syntax:
array_rand(array, number) */

// Array Rand
$color = array("red","green","blue","yellow","brown");

$newArray = array_rand($color);

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo $color[$newArray]."<br>";

// 2nd Parameter

$newArray1 = array_rand($color, 2);
echo $color[$newArray1[0]]."<br>";
echo $color[$newArray1[1]]."<br>";

$color1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");// associative array

$newArray2 = array_rand($color1, 2);
echo "<pre>";
print_r($newArray2);
echo "</pre>";

// Shuffle Array

$color2 = array("red","green","blue","yellow","brown");

shuffle($color2);

echo "<pre>";
print_r($color2);
echo "</pre>";

// Shuffle With Associative Array

$color3 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

shuffle($color3);
echo "<pre>";
print_r($color3);
echo "</pre>";

?>