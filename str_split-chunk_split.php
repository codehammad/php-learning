<?php
/* The str_split() function splits a string into an array.
Syntax: str_split(string,length)*/

/* The chunk_split() function splits a string into a series of smaller parts.
Syntax: chunk_split(string,length,end)*/

// String Split Function
$str = "Hammad Fayyaz";

$array = str_split($str);

echo "<pre>";
print_r($array);
echo "</pre>";

// String Split Length

$array2 = str_split($str, 4);

echo "<pre>";
print_r($array2);
echo "</pre>";


// String Chunk Function

$newStr = chunk_split($str,1,".");
echo $newStr."<br>";

$newStr = chunk_split($str,4,"-");
echo $newStr."<br>";

$newStr = chunk_split($str,3,"<br>");
echo $newStr."<br>";
?>