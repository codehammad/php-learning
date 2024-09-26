<?php
$food = array('orange', 'banana', 'apple', 'grapes');

echo in_array("apple", $food) . "<br>";

// If Condition InArray
if (in_array("apple", $food)) {
    echo "Find Successfully.";
}else{
    echo "Can't Find.";	
}

echo in_array(55, $food,true); // strict mode

echo "<br>";
// Multidimensional Associative Array
echo "Multidimensional Associative Array in_array ";
$a = array(array('p', 'h'), array('p', 'r'), 'o');

echo in_array(array('p', 'h'), $a);

echo "<br>";
// Array Search  ya us ka index number deta ha
echo array_search("apple", $food);
echo "<br>";

// Associative Array
$food = array('a' => 'orange', 'b' => 'banana', 'c' => 'apple', 'd' => 'cherries');

echo array_search("apple", $food);


?>