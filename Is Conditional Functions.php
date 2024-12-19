<?php

// 1. is_int
$var = 850;
echo is_int($var) . "<br>";
var_dump(is_int($var));
if (is_int($var)) {
    echo "<br> $var is an Integer.";
} else {
    echo "<br> $var is not an Integer.";
}

echo "<br><br>";

// 2. is_float
$var = 10.5;
echo is_float($var) . "<br>";
var_dump(is_float($var));
if (is_float($var)) {
    echo "<br> It's a float.";
} else {
    echo "<br> It's not a float.";
}

echo "<br><br>";

// 3. is_array
$var = [1, 2, 3];
echo is_array($var) . "<br>";
var_dump(is_array($var));
if (is_array($var)) {
    echo "<br> It's an array.";
} else {
    echo "<br> It's not an array.";
}

echo "<br><br>";

// 4. is_bool
$var = true;
echo is_bool($var) . "<br>";
var_dump(is_bool($var));
if (is_bool($var)) {
    echo "<br> It's a boolean.";
} else {
    echo "<br> It's not a boolean.";
}

echo "<br><br>";

// 5. is_string
$var = "Hello, World!";
echo is_string($var) . "<br>";
var_dump(is_string($var));
if (is_string($var)) {
    echo "<br> It's a string.";
} else {
    echo "<br> It's not a string.";
}

echo "<br><br>";

// 6. is_null
$var = null;
echo is_null($var) . "<br>";
var_dump(is_null($var));
if (is_null($var)) {
    echo "<br> It's NULL.";
} else {
    echo "<br> It's not NULL.";
}

echo "<br><br>";

// 7. is_callable
function call(){
    // for check if function exist
}
echo is_callable('call') . "<br>";
var_dump(is_callable('call'));
if (is_callable('call')) {
    echo "<br> It's callable.";
} else {
    echo "<br> It's not callable.";
}

echo "<br><br>";

// 8. is_numeric
$var = "1234";
echo is_numeric($var) . "<br>";
var_dump(is_numeric($var));
if (is_numeric($var)) {
    echo "<br> It's numeric.";
} else {
    echo "<br> It's not numeric.";
}

echo "<br><br>";

// 9. is_scalar  if array or object use hoga to ya false hoga
$var = 123;
echo is_scalar($var) . "<br>";
var_dump(is_scalar($var));
if (is_scalar($var)) {
    echo "<br> It's scalar.";
} else {
    echo "<br> It's not scalar.";
}

echo "<br><br>";

// 10. is_countable
$var = [1, 2, 3];
echo is_countable($var) . "<br>";
var_dump(is_countable($var));
if (is_countable($var)) {
    echo "<br> It's countable.";
} else {
    echo "<br> It's not countable.";
}

?>