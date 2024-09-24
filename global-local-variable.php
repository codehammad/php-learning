<?php
$x = 10;

function test() {
  global $x; // Global Variable
  echo "Variable x inside function : $x <br>";
}
test();

echo "Variable x outside function : $x";

echo "<br>";

$y = 10;
function test1() {
    global $x, $y;
    $x = $x + $y;
}

test1();
echo "Assign new value to global variable in function: $x";
?>