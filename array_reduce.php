<?php
/* The array_reduce() function sends the values in an array to a user-defined function, and returns a string.
Syntax: array_reduce(array, myfunction, initial) */

// Array Reduce
function myFunction($n,$m){   //$n carry ka liya use hoga
  return $n . "-" . $m;  // ya ak hi string bna da ga 
}

$a = ['orange', 'banana', 'apple'];

$newArray = array_reduce($a, 'myFunction');

echo "<pre>";
print_r($newArray);
echo "</pre>";

// Passing third parameter as a Initial Value

$newArray1 = array_reduce($a, 'myFunction', "lemon");
echo "<pre>";
print_r($newArray1);
echo "</pre>";

// Use Numeric Index array

$a1 = [1, 2, 3, 4, 5];

$newArray3 = array_reduce($a1, 'myFunction', 20);
echo "<pre>";
print_r($newArray3);
echo "</pre>";

// Sum
function myFunction1($n,$m){   
  return $n + $m;
}

$newArray4 = array_reduce($a1, 'myFunction1');
echo "<pre>";
print_r($newArray4);
echo "</pre>";

// Additon
function myFunction2($n,$m){  
	//$n =$n + $m; 
	$n += $m;
	return $n;
}

$newArray5 = array_reduce($a1, 'myFunction2',10);

echo "<pre>";
print_r($newArray5);
echo "</pre>";

?>