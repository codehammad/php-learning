<?php
/* The getcwd() function in PHP returns the current working directory
The chdir() function in PHP changes the current working directory
The scandir() function in PHP returns an array of files and directories */

echo "Current working directory: " . getcwd() . "<br>";

// chdir('upload-images');

// echo "Current working directory: " . getcwd() . "<br>";

//$dir = "."; // store current dir
//$dir = "upload-images/"; // specify dir
$dir = getcwd();// store current dir


echo "<pre>";
print_r(scandir($dir,1)); // 1 means decending order
echo "</pre>";
?>