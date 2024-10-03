<?php
/* Syntax
md5(string,raw) */
/* Syntax
sha1(string,raw) */

//Md5 Function
$str = "Hello";

$newstr = "The string: ".$str;

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = "md5 Binary : ".md5($str, TRUE); //-- 16 char
echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = "md5 HEX : ".md5($str); //-- 32 char
echo "<pre>";
print_r($newstr);
echo "</pre>";

// sha1 Function
$newstr = "sha1 Binary : ".sha1($str, TRUE); //-- 20 char
echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = "sha1 Binary : ".sha1($str);  //-- 40 char
echo "<pre>";
print_r($newstr);
echo "</pre>";

/*------- If Condition Md5 Function Example------- */
if (md5($str) == "8b1a9953c4611296a827abf8c47804d7")
  {
  echo "Password Match";
  }

?>
