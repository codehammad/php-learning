<?php
/* The str_pad() function pads a string to a new length.
Syntax: str_pad(string,length,pad_string,pad_type) */

/* The str_repeat() function repeats a string a specified number of times.
Syntax: str_repeat(string,repeat) */

// String Pad Function
$str = "Hello World";

echo str_pad($str,20,".");

$newstr = str_pad($str,20,"+");
echo "<pre>";
print_r($newstr);
echo "</pre>";

// STR_PAD_LEFT & STR_PAD_BOTH
$newstr = str_pad($str, 20, ".", STR_PAD_LEFT);
echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = str_pad($str, 20, ".", STR_PAD_BOTH);
echo "<pre>";
print_r($newstr);
echo "</pre>";

// String Repeat Function
$newstr = str_repeat("Wow",5);
echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = str_repeat("+Wow+",5);
echo "<pre>";
print_r($newstr);
echo "</pre>";

?>