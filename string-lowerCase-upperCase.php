<?php
// converts a string to Lowercase
$str = "Hammad Fayyaz";

$newStr = strtolower($str);
echo $newStr;
echo "<br>";

//converts a string to Uppercase

$newStr1 = strtoupper($str);

echo $newStr1;
echo "<br>";

//Convert the first character of a string to lowercase

$newStr2 = lcfirst($str);

echo $newStr2;
echo "<br>";

//Converts the first character of a string to uppercase

$newStr3 = ucfirst($str);

echo $newStr3;
echo "<br>";

// Converts the first character of each word in a string to uppercase
$newStr4 = ucwords($str);
echo $newStr4;
echo "<br>";

?>