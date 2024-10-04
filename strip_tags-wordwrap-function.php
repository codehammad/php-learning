<?php
/* The strip_tags() function strips a string from HTML, XML, and PHP tags.
Syntax:strip_tags(string,allow) */
/* The wordwrap() function wraps a string into new lines when it reaches a specific length.
Syntax:wordwrap(string,width,break,cut) */

$str = "My <i>name</i> is <b>Hammad</b>";

$newstr = strip_tags($str);
echo "<pre>";
print_r($newstr);
echo "</pre>";

// Remove tag
$newstr = strip_tags($str,"<b>");
echo "<pre>";
print_r($newstr);
echo "</pre>";

// Wordwrap Function
$str = "This world is beautiful.";

$newstr = wordwrap($str,5);
echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = wordwrap($str,5,"<br>",TRUE);// wrap exact 5 words
echo "<pre>";
print_r($newstr);
echo "</pre>";
?>