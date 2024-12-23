<?php
/* The glob() function in PHP is used to search for files and directories that match a specified pattern.
Syntax: glob(pattern, flags) */

$files = glob("*.txt");  // Matches all .txt files in the current directory
echo "<pre>";
print_r($files);
echo "</pre>";

$files = glob("{*.php,*.txt}", GLOB_BRACE);  // Use for multiple files check
echo "<pre>";
print_r($files);
echo "</pre>";

$directories = glob("*", GLOB_ONLYDIR);  // Matches only directories
echo "<pre>";
print_r($directories);
echo "</pre>";

$files = glob("*", GLOB_MARK);  // Add slashe after directories
echo "<pre>";
print_r($files);
echo "</pre>";
?>