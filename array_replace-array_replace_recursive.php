<?php
$fruit = ['orange', 'banana', 'apple', 'grapes'];

$veggie = ['carrot', 'pea'];

$newArray = array_replace($fruit, $veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";

// Associative Array
$veggie = ['a' => 'carrot', 'b' => 'pea' , "c" => "jora"];

$veg = ['a' => 'nora', 'b' => 'bool'];

$newArray1 = array_replace($veggie,$veg);
echo "<pre>";
print_r($newArray1);
echo "</pre>";

// array_replace_recursive
$array1 = array("a"=>array("red"),"b"=>array("green","pink"));
$array2 = array("a"=>array("yellow"),"b"=>array("black"));

$newArray2 = array_replace_recursive($array1, $array2);
echo "<pre>";
print_r($newArray2);
echo "</pre>";
?>