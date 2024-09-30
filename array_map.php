<?php
/* The array_map() function sends each value of an array to a user-made function, and returns an array with new values, given by the user-made function.  ya return karta ha
Syntax: array_map(myfunction, array1, array2, array3, ...) */

// Array Map
function square($n){
	return $n * $n;
}
$a = [1, 2, 3, 4, 5, 6];

$newArray = array_map("square",$a);

echo "<pre>";
print_r($newArray);
echo "</pre>";

// Array Map with two arrays

function square1($n ,$m){
  return "$n for $m";
}

$b = ['lemon', 'orange', 'banana', 'apple', 'guava'];

$newArray1 = array_map('square1', $a, $b);

echo "<pre>";
print_r($newArray1);
echo "</pre>";

// Return Mutlidimensional array  ya ak array ko keys or dusray ko values bna da ga in nested array

function square2($n ,$m){
  return [$n => $m];
}

$newArray2 = array_map('square2', $a, $b);
echo "<pre>";
print_r($newArray2);
echo "</pre>";

// Passing no function sa ya dono array ko nested array ma display karwa da ga

$newArray3 = array_map(null, $a, $b);
echo "<pre>";
print_r($newArray3);
echo "</pre>";

// Using Associative Array

function square3($n){
  return strtoupper($n);  // uppercase
}

$a1 = array("one" => "Apple", "two" => "Banana", "three" => "Orange");

$newArray4 = array_map("square3", $a1);
echo "<pre>";
print_r($newArray4);
echo "</pre>";


?>