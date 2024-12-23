<?php

$string = "PHP is a general-purpose scripting language.";

$pattern = "/PHP/i";

$replacement = "Javascript";

echo preg_replace($pattern,$replacement,$string) . "<br>";

// if in tag
$string = "<h1>PHP is a general-purpose scripting language.</h1>";

$pattern = "/<.+?>/i";

$replacement = "";

echo preg_replace($pattern,$replacement,$string) . "<br>";

// date
$date = "October 22, 2024";

$pattern = "/\d{1,2}(?=,)/";// will match 1 or 2 digits that are followed by a comma.

$replaced_date = preg_replace($pattern, '25', $date);

echo $replaced_date . "<br>";

// Complex Replace with reorder  show in this format  startDate = 12/8/1999
$string = "{startDate} = 1999-8-12";

$pattern = "/\{(\w+)\}\s*=\s*(\d{4})-(\d{1,2})-(\d{1,2})/";

$replacement = '$1 = $3/$4/$2';

$newString = preg_replace($pattern, $replacement, $string);

echo $newString . "<br>";

// preg_quote  add slashes before special char
$string = "Hello, how are you? I have 100+ apples.";

$escapedString = preg_quote($string);

echo $escapedString;


// preg_split  splits a string into an array based on a regular expression pattern
$string = "PHP is a general-purpose scripting language.";

$split = preg_split("/\s/",$string,4); // 3 parameter is limit

echo "<pre>";
print_r($split);
echo "</pre>";


$string = "PHP is a general-purpose scripting language.";

$split = preg_split("/is|scripting/",$string);

echo "<pre>";
print_r($split);
echo "</pre>";

// with url
$url = "https://www.example.com/path/to/resource?query=1&other=2";

$split_url = preg_split("/[\/\?&=]+/", $url);

echo "<pre>";
print_r($split_url);
echo "</pre>";

// without empty spaces
$string = "PHP    is a   general-purpose   scripting language.";

$split = preg_split("/\s+/", $string, -1, PREG_SPLIT_NO_EMPTY);

echo "<pre>";
print_r($split);
echo "</pre>";

// tells offset value where its break
$string = "My Name is John.";

$split = preg_split("/\s+/", $string, -1, PREG_SPLIT_OFFSET_CAPTURE);

echo "<pre>";
print_r($split);
echo "</pre>";

?>