<?php
// String Addslashes Function
$str = "Hello I am 'Hammad Fayyaz'";

echo "<pre>";
print_r($str);
echo "</pre>";

$newstr = addslashes($str);
echo "<pre>";
print_r($newstr);
echo "</pre>";

// Remove slashes which is added by addslashes
$newstr = stripslashes($str);
echo "<pre>";
print_r($str);
echo "</pre>";

// String Addcslashes Function
$str = "Hello World!";

$newstr = addcslashes($str, "W");
echo "<pre>";
print_r($str);
echo "</pre>";

// String Multiple Characters Addcslashes
$newstr =  addcslashes($str,"A..Z");
echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr =  addcslashes($str,"a..z");
echo "<pre>";
print_r($newstr);
echo "</pre>";

// String stripcslashes Function
$newstr =  stripcslashes($str);
echo "<pre>";
print_r($newstr);
echo "</pre>";

?>