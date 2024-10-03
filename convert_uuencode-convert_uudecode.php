<?php
//Convert uuencode Function
$str = "Hello world!";

$encodeString = convert_uuencode($str);
echo $encodeString . "<br>";

//Convert uudecode Function
$decodeString = convert_uudecode($encodeString);
echo $decodeString;

?>