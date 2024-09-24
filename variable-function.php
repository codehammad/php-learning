<?php
function wow($name) {
    echo "Hello $name";
}

$key = "wow";
$key('Hammad');

echo "<br>";
// Anonymous function
$sayHello = function($name) {
  echo "Hello $name";
};

$sayHello('Hammad Fayyaz');

?>
