<?php
/* The strcmp() function compares two strings.
Syntax:strcmp(string1,string2) */

/* The substr_compare() function compares two strings from a specified start position.
Syntax:substr_compare(string1,string2,startpos,length,case)*/

// String Compare Function
$newstr = strcmp("Hello world!","Hello world!");
echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr =  strcmp("Hello world!","Hello");
echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr =  strcmp("Hello world!","Hello world! Hello!");

echo "<pre>";
print_r($newstr);
echo "</pre>";

// strncmp --- Same as strcmp except IIIrd param - length
$newstr = strncmp("Hello world!","Hello world!", 6);
echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = strncmp("Hello world!","Hello World!", 6);
echo "<pre>";
print_r($newstr);
echo "</pre>";

// strcasecmp --- Case-insenstive
$newstr = strcasecmp("Hello world!","Hello WORLD!");
echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = strcasecmp("Hello world!","HELLO");
echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = strncasecmp("Hello world!","HELLO world!", 6);

echo "<pre>";
print_r($newstr);
echo "</pre>";

// strnatcmp  --- Natural Algorithm use for comparision
$newstr = strnatcmp("2Hello world!","10Hello world!");
echo "<pre>";
print_r($newstr);
echo "</pre>";

// strnatcasecmp --- Case-insenstive
$newstr = strnatcasecmp("2Hello world!","10Hello WORLD!");
echo "<pre>";
print_r($newstr);
echo "</pre>";

// substr_compare
$newstr = substr_compare("Hello world","world",6);

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = substr_compare("Hello world","world",0, 3);

echo "<pre>";
print_r($newstr);
echo "</pre>";

// similar_text

$newstr = similar_text("Hello World","Hello Hammad");
echo "<pre>";
print_r($newstr);
echo "</pre>";

similar_text("MFayyaz", "Fayyaz", $perc);
$newstr = "Percentage : $perc %";
echo "<pre>";
print_r($newstr);
echo "</pre>";
?>