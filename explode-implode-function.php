<?php
/* The implode() function returns a string from the elements of an array.
Syntax: implode(separator,array) */

/*The explode() function breaks a string into an array.
Syntax: explode(separator,string,limit) */

// Explode Function

$str = "Hello world. Its a beautiful day";

$array = explode(" ",$str);
echo "<pre>";
print_r($array);
echo "</pre>";

$array1 = explode(".",$str);
echo "<pre>";
print_r($array1);
echo "</pre>";

// Using Limit with explode

$array2 = explode(" ",$str, 2);
echo "<pre>";
print_r($array2);
echo "</pre>";


$array3 = explode(" ",$str, 0); //Return in one Array Value
echo "<pre>";
print_r($array3);
echo "</pre>";

$array4 = explode(" ",$str, -1); // ya skip kar da ga word ko
echo "<pre>";
print_r($array4);
echo "</pre>";

$str1 = "red,green,blue,orange";

$array5 = explode(",",$str1);
echo "<pre>";
print_r($array5);
echo "</pre>";

// Implode Function

$arr = array("Hello","World!","Beautiful","Day!");

$strr = implode(" ",$arr);

echo $strr;
echo "<br>";

//EMAXPLE II
$strr1 = implode("-",$arr);

echo $strr1;
echo "<br>";

//EMAXPLE III

$strr2 = implode(",",$arr);

echo $strr2;
echo "<br>";

//You can use (Join) function work same as Implode
$strr3 = join("<br>",$arr);

echo $strr3;
echo "<br>";

?>