<?php
/* The strlen() function returns the length of a string.
Syntax: strlen(string) 

The str_word_count() function counts the number of words in a string.
Syntax: str_word_count(string,return,char)

The substr_count() function counts the number of times a substring occurs in a string.
Syntax: substr_count(string,substring,start,length) */

// String Length Function
$str = "Hammad Fayyaz";

$newStr = strlen($str);
echo "<pre>";
print_r($newStr);
echo "</pre>";

// II Example
$str = "Hammad";

$newStr = strlen($str);
echo "<pre>";
print_r($newStr);
echo "</pre>";

// str_word_count
$newStr = str_word_count($str);
echo "<pre>";
print_r($newStr);
echo "</pre>";

$str = "Ham mad Fayyaz";

$newStr = str_word_count($str);
echo "<pre>";
print_r($newStr);
echo "</pre>";

// Return Array
// str_word_count($str,0);

$array =  str_word_count($str,1);
echo "<pre>";
print_r($array);
echo "</pre>";

// Returns an array where the key is the position of the word in the string
$array =  str_word_count($str,2);

echo "<pre>";
print_r($array);
echo "</pre>";

// String Count
$count = substr_count("Hello world. The world is nice","world");

echo "<pre>";
print_r($count);
echo "</pre>";

$count = substr_count("Hello world. The world is nice","world",10);// 10 ya search starting yaha sa ho gi
echo "<pre>";
print_r($count);
echo "</pre>";

$count = substr_count("Hello world. The world is nice","world",1,25);
echo "<pre>";
print_r($count);
echo "</pre>";

?>