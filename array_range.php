<?php
// Array Range Function
$newArray = range(0, 10);

echo "<pre>";
print_r($newArray);
echo "</pre>";

//Using step

$newArray1 = range(0, 100, 10);
echo "<pre>";
print_r($newArray1);
echo "</pre>";

// Using Alphabet

$newArray2 = range('a', 'h');
echo "<pre>";
print_r($newArray2);
echo "</pre>";

//OR reverse

$newArray3 = range('h', 'a');

echo "<pre>";
print_r($newArray3);
echo "</pre>";

// Foreach Array Range

foreach (range('h', 'a') as $letter) {
    echo $letter . "<br>";
}

?>
