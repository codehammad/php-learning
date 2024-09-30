<?php
/* The PHP list( ) function is used to assign values to a list of variables in one operation. */

// Array List Function
$color = array('red', 'green', 'blue');

list($a , $b, $c) = $color;

echo "Value of a : $a <br>";
echo "Value of b : $b <br>";
echo "Value of c : $c <br>";
echo "<br>";

// Array Numberic Value

$color1 = array(22,55,33);

list($a , $b, $c) = $color1;
echo "Value of a : $a <br>";
echo "Value of b : $b <br>";
echo "Value of c : $c <br>";
echo "<br>";

// Remove Variable

list($a , , $c) = $color1;

echo "Value of a : $a <br>";
echo "Value of c : $c <br>";
echo "<br>";

// Only works with Numeric Index in accociative array

$color2 = array(0 => 'red', 1 => 'green', 2 => 'blue');

list($a , $b, $c) = $color2;
echo "Value of a : $a <br>";
echo "Value of b : $b <br>";
echo "Value of c : $c <br>";
echo "<br>";

// All values in One Array

list($d[0], $d[1], $d[2]) = $color2;
echo "Value of d[0] : $d[0] <br>";
echo "Value of d[1] : $d[1] <br>";
echo "Value of d[2] : $d[2] <br>";

?>
