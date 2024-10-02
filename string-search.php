<?php
// strstr -- case-sensitive
$str = "Hello world. The world is nice";

$newstr = strstr($str, "world");

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = strstr($str, "world",true); //-- before_search
echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = strstr($str, "WORLD"); //-- case-sensitive
echo "<pre>";
print_r($newstr);
echo "</pre>";

// stristr -- case-insensitive
$newstr = stristr($str, "WORLD"). "<br>";
echo "<pre>";
print_r($newstr);
echo "</pre>";

// strchr -- same as strstr

$newstr = strchr($str,"world",true); //true
echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = strrchr($str,"world"); //reverse order
echo "<pre>";
print_r($newstr);
echo "</pre>";

// strpbrk - Search for specified characters
$newstr = strpbrk($str, "wo"). "<br>"; // w or o ma sa jo pahlay character milayga us ka bad sab show karwa da ga
echo "<pre>";
print_r($newstr);
echo "</pre>";
?>