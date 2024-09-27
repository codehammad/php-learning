<?php
/* Syntax:  array_keys(array, value, strict) 
The array_keys() function returns an array containing the keys.*/

/*-------- array_keys--------*/
$color =["red","green","blue","yellow"];

$newArray = array_keys($color);

echo '<pre>';
print_r($newArray);
echo '</pre>';

/* --------With Associative Array --------- */
$color1 =[
          "first" =>"red",
          "second" =>"green",
          "third" =>"blue",
          "fourth" =>"yellow"
        ];

$newArray = array_keys($color1);
echo '<pre>';
print_r($newArray);
echo '</pre>';

$newArray1 = array_key_first($color1);  // print first key

echo '<pre>';
print_r($newArray1);
echo '</pre>';

$newArray1 = array_key_last($color1); // print last key

echo '<pre>';
print_r($newArray1);
echo '</pre>';

/* ------array_key_exists--------- */
$newArray1 = array_key_exists("third", $color1);  //check key

echo '<pre>';
print_r($newArray1);
echo '</pre>';

$newArray1 =  array_key_exists("six", $color);
echo '<pre>';
print_r($newArray1);
echo '</pre>';

// array_key_exists short name
$newArray1 = key_exists("second", $color1);

echo '<pre>';
print_r($newArray1);
echo '</pre>';

/* ---------check result with if condition----------- */
if ($newArray1)
  {
    echo "Key exists!";
  }
  else
  {
    echo "Key does not exist!";
  }


?>